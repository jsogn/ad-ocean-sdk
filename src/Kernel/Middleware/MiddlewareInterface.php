<?php

declare(strict_types=1);

namespace AdOceanSdk\Kernel\Middleware;

use GuzzleHttp\Promise\PromiseInterface;

/**
 * Promise 化的中间件接口。
 *
 * 调用 `$next($context)` 始终返回 PromiseInterface<RequestResponse>。
 * 中间件可：
 *  - 在调用 `$next` 前修改 context
 *  - 在 `then()` 里观察/转换响应、按业务码抛异常
 *  - 在 `otherwise()` 里捕获异常以重试 / 刷 token / 降级
 *
 * 由于使用 Promise，sync `call()` 与 async `callAsync()` 共用同一套中间件。
 */
interface MiddlewareInterface
{
    /**
     * @param callable(RequestContext): PromiseInterface $next
     * @return PromiseInterface PromiseInterface<\AdOceanSdk\RequestResponse>
     */
    public function process(RequestContext $context, callable $next): PromiseInterface;
}
