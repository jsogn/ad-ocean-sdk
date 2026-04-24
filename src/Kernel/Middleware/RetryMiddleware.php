<?php

declare(strict_types=1);

namespace AdOceanSdk\Kernel\Middleware;

use AdOceanSdk\Kernel\Exceptions\NetworkException;
use AdOceanSdk\Kernel\Exceptions\RateLimitException;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 指数退避重试，触发条件：
 *  - NetworkException（Guzzle 网络错误）
 *  - RateLimitException（业务限流码，依赖 ApiErrorMiddleware 在其后/内层）
 *
 * 退避：baseDelayMs * 2^(attempt-1)（截断到 maxDelayMs，±20% jitter）。
 * sleeper 可注入，便于测试关闭真实 sleep。
 *
 * 注意：sleeper 是阻塞性的；在 callBatch 并发场景下，单个请求的 sleep
 * 会阻塞 curl_multi 的事件循环。如对延时敏感请减少重试或缩短 baseDelayMs。
 */
final class RetryMiddleware implements MiddlewareInterface
{
    /** @var \Closure(int): void */
    private \Closure $sleeper;

    /**
     * @param int $maxAttempts 总尝试次数（>=1）
     * @param int $baseDelayMs 首次退避基数
     * @param int $maxDelayMs 单次最大退避
     * @param list<class-string<\Throwable>> $retryableExceptions
     * @param (callable(int $delayMs): void)|null $sleeper
     */
    public function __construct(
        private readonly int $maxAttempts = 3,
        private readonly int $baseDelayMs = 200,
        private readonly int $maxDelayMs = 5000,
        private readonly array $retryableExceptions = [NetworkException::class, RateLimitException::class],
        ?callable $sleeper = null,
    ) {
        $this->sleeper = $sleeper === null
            ? static function (int $ms): void { usleep($ms * 1000); }
            : \Closure::fromCallable($sleeper);
    }

    public function process(RequestContext $context, callable $next): PromiseInterface
    {
        return $this->attempt(0, $context, $next);
    }

    private function attempt(int $n, RequestContext $context, callable $next): PromiseInterface
    {
        return $next($context->withAttribute('retry.attempt', $n))
            ->otherwise(function (\Throwable $e) use ($n, $context, $next): PromiseInterface {
                $nextN = $n + 1;
                if ($nextN >= max(1, $this->maxAttempts) || !$this->isRetryable($e)) {
                    throw $e;
                }

                ($this->sleeper)($this->computeDelayMs($nextN));
                return $this->attempt($nextN, $context, $next);
            });
    }

    private function isRetryable(\Throwable $e): bool
    {
        foreach ($this->retryableExceptions as $cls) {
            if ($e instanceof $cls) {
                return true;
            }
        }
        return false;
    }

    private function computeDelayMs(int $attempt): int
    {
        $exp = $this->baseDelayMs * (2 ** ($attempt - 1));
        $exp = (int) min($exp, $this->maxDelayMs);
        $jitter = (int) ($exp * 0.2);
        if ($jitter <= 0) {
            return max(0, $exp);
        }
        return max(0, $exp + random_int(-$jitter, $jitter));
    }
}
