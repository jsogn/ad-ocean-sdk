<?php

declare(strict_types=1);

use AdOceanSdk\Kernel\Middleware\MiddlewareInterface;
use AdOceanSdk\Kernel\Middleware\Pipeline;
use AdOceanSdk\Kernel\Middleware\RequestContext;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;
use AdOceanSdk\RequestResponse;
use GuzzleHttp\Promise\Create as PromiseCreate;
use GuzzleHttp\Promise\PromiseInterface;
use PHPUnit\Framework\TestCase;

final class PipelineTest extends TestCase
{
    public function testMiddlewaresExecuteInPushOrderAroundFinalHandler(): void
    {
        $log = [];
        $pipeline = new Pipeline();
        $pipeline->push(new SpyMiddleware('A', $log));
        $pipeline->push(new SpyMiddleware('B', $log));

        $response = $pipeline->handle($this->makeContext(), function () use (&$log): PromiseInterface {
            $log[] = 'handler';
            return PromiseCreate::promiseFor(RequestResponse::from(['code' => 0, 'message' => 'ok', 'request_id' => 'r', 'data' => []]));
        })->wait();

        self::assertSame(['A:before', 'B:before', 'handler', 'B:after', 'A:after'], $log);
        self::assertSame(0, $response->getCode());
    }

    public function testEmptyPipelineCallsHandlerDirectly(): void
    {
        $pipeline = new Pipeline();
        $response = $pipeline->handle(
            $this->makeContext(),
            fn () => PromiseCreate::promiseFor(RequestResponse::from(['code' => 7, 'message' => 'x', 'request_id' => 'r', 'data' => []])),
        )->wait();

        self::assertSame(7, $response->getCode());
    }

    public function testMiddlewareCanModifyContextSeenByHandler(): void
    {
        $pipeline = new Pipeline();
        $pipeline->push(new class implements MiddlewareInterface {
            public function process(RequestContext $context, callable $next): PromiseInterface
            {
                return $next($context->withParams(['injected' => 'yes']));
            }
        });

        $captured = null;
        $pipeline->handle($this->makeContext(), function (RequestContext $ctx) use (&$captured): PromiseInterface {
            $captured = $ctx;
            return PromiseCreate::promiseFor(RequestResponse::from(['code' => 0, 'message' => 'ok', 'request_id' => 'r', 'data' => []]));
        })->wait();

        if (!$captured instanceof RequestContext) {
            self::fail('Pipeline handler did not capture request context.');
        }

        self::assertSame(['injected' => 'yes'], $captured->params);
    }

    public function testInsertBeforeAndAfterPlaceMiddlewares(): void
    {
        $log = [];
        $pipeline = new Pipeline();
        $a = new SpyMiddleware('A', $log);
        $b = new SpyMiddleware('B', $log);
        $c = new SpyMiddleware('C', $log);
        $d = new SpyMiddleware('D', $log);
        $pipeline->push($a)->push($b);
        $pipeline->insertBefore(SpyMiddleware::class, $c); // C 插到第一个 SpyMiddleware (A) 之前 → [C, A, B]
        $pipeline->insertAfter(SpyMiddleware::class, $d);   // D 插到第一个 SpyMiddleware (现在是 C) 之后 → [C, D, A, B]

        $names = array_map(static fn (SpyMiddleware $m) => $m->name, $pipeline->all());
        self::assertSame(['C', 'D', 'A', 'B'], $names);
    }

    public function testRemoveDropsMatchingMiddlewares(): void
    {
        $log = [];
        $pipeline = new Pipeline();
        $pipeline->push(new SpyMiddleware('A', $log))->push(new SpyMiddleware('B', $log));
        $pipeline->remove(SpyMiddleware::class);
        self::assertSame([], $pipeline->all());
    }

    private function makeContext(): RequestContext
    {
        return new RequestContext(
            api: new PipelineDummyApi(),
            method: 'GET',
            uri: 'https://example.com/x',
        );
    }
}

final class SpyMiddleware implements MiddlewareInterface
{
    /** @param array<int, string> $log */
    public function __construct(public readonly string $name, private array &$log)
    {
    }

    public function process(RequestContext $context, callable $next): PromiseInterface
    {
        $this->log[] = $this->name . ':before';
        return $next($context)->then(function (RequestResponse $r): RequestResponse {
            $this->log[] = $this->name . ':after';
            return $r;
        });
    }
}

final class PipelineDummyApi extends RequestApi
{
    protected string $address = 'x';
    protected RequestMethodEnum $method = RequestMethodEnum::GET;
}
