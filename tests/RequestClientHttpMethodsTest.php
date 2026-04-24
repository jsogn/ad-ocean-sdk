<?php

declare(strict_types=1);

use AdOceanSdk\Kernel\Middleware\MiddlewareInterface;
use AdOceanSdk\Kernel\Middleware\RequestContext;
use AdOceanSdk\RequestClient;
use AdOceanSdk\RequestFormatEnum;
use AdOceanSdk\RequestMethodEnum;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

final class RequestClientHttpMethodsTest extends TestCase
{
    public function testGetConvenienceUsesQueryFormatAndPipeline(): void
    {
        $history = [];
        $seenMethod = null;
        $seenUri = null;
        $client = $this->makeClient($history, [
            new Response(200, [], json_encode(['code' => 0, 'message' => 'ok', 'request_id' => 'g', 'data' => []], JSON_THROW_ON_ERROR)),
        ]);

        $client->addMiddleware(new class($seenMethod, $seenUri) implements MiddlewareInterface {
            public function __construct(private mixed &$seenMethod, private mixed &$seenUri) {}
            public function process(RequestContext $context, callable $next): PromiseInterface
            {
                $this->seenMethod = $context->method;
                $this->seenUri = $context->uri;
                return $next($context);
            }
        });

        $client->get('open_api/2/direct/get/', ['advertiser_ids' => [1, 2], 'keyword' => 'demo']);

        self::assertSame('GET', $seenMethod);
        self::assertSame('open_api/2/direct/get/', $seenUri);
        self::assertSame('GET', $history[0]['request']->getMethod());
        self::assertSame('advertiser_ids=%5B1%2C2%5D&keyword=demo', $history[0]['request']->getUri()->getQuery());
    }

    public function testPostConvenienceDefaultsToJson(): void
    {
        $history = [];
        $client = $this->makeClient($history, [
            new Response(200, [], json_encode(['code' => 0, 'message' => 'ok', 'request_id' => 'p', 'data' => []], JSON_THROW_ON_ERROR)),
        ]);

        $client->post('open_api/2/direct/post/', ['advertiser_id' => 123]);

        self::assertSame('POST', $history[0]['request']->getMethod());
        self::assertSame('{"advertiser_id":123}', (string) $history[0]['request']->getBody());
        self::assertSame('application/json', $history[0]['request']->getHeaderLine('Content-Type'));
    }

    public function testRequestSupportsPatchWithCustomFormatAndHeaders(): void
    {
        $history = [];
        $client = $this->makeClient($history, [
            new Response(200, [], json_encode(['code' => 0, 'message' => 'ok', 'request_id' => 'r', 'data' => []], JSON_THROW_ON_ERROR)),
        ]);

        $client->request(
            RequestMethodEnum::PATCH,
            'open_api/2/direct/patch/',
            ['status' => 'paused'],
            RequestFormatEnum::FORM_PARAMS,
            ['X-Test' => 'trace-1'],
        );

        self::assertSame('PATCH', $history[0]['request']->getMethod());
        self::assertSame('status=paused', (string) $history[0]['request']->getBody());
        self::assertSame('trace-1', $history[0]['request']->getHeaderLine('X-Test'));
        self::assertSame('application/x-www-form-urlencoded', $history[0]['request']->getHeaderLine('Content-Type'));
    }

    public function testDeleteConvenienceDefaultsToQueryFormat(): void
    {
        $history = [];
        $client = $this->makeClient($history, [
            new Response(200, [], json_encode(['code' => 0, 'message' => 'ok', 'request_id' => 'd', 'data' => []], JSON_THROW_ON_ERROR)),
        ]);

        $client->delete('open_api/2/direct/delete/', ['id' => 7]);

        self::assertSame('DELETE', $history[0]['request']->getMethod());
        self::assertSame('id=7', $history[0]['request']->getUri()->getQuery());
    }

    private function makeClient(array &$history, array $responses): RequestClient
    {
        $mockHandler = new MockHandler($responses);
        $handlerStack = HandlerStack::create($mockHandler);
        $handlerStack->push(Middleware::history($history));

        return RequestClient::make()->setHttpClient(new Client([
            'base_uri' => 'https://api.oceanengine.com/',
            'handler' => $handlerStack,
        ]));
    }
}