<?php

declare(strict_types=1);

namespace AdOceanSdk\Kernel\Middleware;

use GuzzleHttp\Promise\PromiseInterface;

/**
 * 顺序执行 middleware 栈，最后调用 finalHandler 发起真实请求。
 *
 * 第一个 push 进来的 middleware 最先收到 context，也最后收到 response（onion 包裹）。
 * 提供 insertBefore/insertAfter，按 middleware 类名定位插入位置，便于复杂流水线编排。
 */
final class Pipeline
{
    /** @var list<MiddlewareInterface> */
    private array $middlewares = [];

    public function push(MiddlewareInterface $middleware): self
    {
        $this->middlewares[] = $middleware;

        return $this;
    }

    public function prepend(MiddlewareInterface $middleware): self
    {
        array_unshift($this->middlewares, $middleware);

        return $this;
    }

    /**
     * 在第一个 $beforeClass 类型的 middleware 之前插入。
     * 找不到则 push 到末尾。
     */
    public function insertBefore(string $beforeClass, MiddlewareInterface $middleware): self
    {
        foreach ($this->middlewares as $i => $existing) {
            if ($existing instanceof $beforeClass) {
                array_splice($this->middlewares, $i, 0, [$middleware]);
                return $this;
            }
        }

        return $this->push($middleware);
    }

    /**
     * 在第一个 $afterClass 类型的 middleware 之后插入。
     * 找不到则 push 到末尾。
     */
    public function insertAfter(string $afterClass, MiddlewareInterface $middleware): self
    {
        foreach ($this->middlewares as $i => $existing) {
            if ($existing instanceof $afterClass) {
                array_splice($this->middlewares, $i + 1, 0, [$middleware]);
                return $this;
            }
        }

        return $this->push($middleware);
    }

    /**
     * 移除所有 $class 类型的 middleware。
     */
    public function remove(string $class): self
    {
        $this->middlewares = array_values(array_filter(
            $this->middlewares,
            static fn (MiddlewareInterface $m): bool => !($m instanceof $class),
        ));

        return $this;
    }

    /**
     * @return list<MiddlewareInterface>
     */
    public function all(): array
    {
        return $this->middlewares;
    }

    /**
     * @param callable(RequestContext): PromiseInterface $finalHandler
     * @return PromiseInterface PromiseInterface<\AdOceanSdk\RequestResponse>
     */
    public function handle(RequestContext $context, callable $finalHandler): PromiseInterface
    {
        $next = $finalHandler;

        foreach (array_reverse($this->middlewares) as $middleware) {
            $next = static fn (RequestContext $ctx): PromiseInterface => $middleware->process($ctx, $next);
        }

        return $next($context);
    }
}
