<?php

declare(strict_types=1);

use AdOceanSdk\Application;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestClient;
use AdOceanSdk\RequestMethodEnum;
use AdOceanSdk\SdkConfig;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

final class RequestClientTest extends TestCase
{
    public function testHttpClientIsReusedAcrossHeaderAndTokenChanges(): void
    {
        $client = RequestClient::make();

        $first = $this->invokeGetHttpClient($client);
        $second = $this->invokeGetHttpClient($client);
        self::assertSame($first, $second);

        // 变更 base_uri / timeout 会重建（Guzzle base 配置变了）
        $client->setTimeout(30);
        $third = $this->invokeGetHttpClient($client);
        self::assertNotSame($first, $third);

        // 变更 headers / access token 不重建，保护连接池
        $client->addHeader('X-Test', 'changed');
        $client->setAccessToken('tok');
        $fourth = $this->invokeGetHttpClient($client);
        self::assertSame($third, $fourth);
    }

    public function testGetRequestEncodesArrayParamsIntoQueryString(): void
    {
        $history = [];
        $mockHandler = new MockHandler([
            new Response(200, [], json_encode([
                'code' => 0,
                'message' => 'ok',
                'request_id' => 'req-1',
                'data' => ['ok' => true],
            ], JSON_THROW_ON_ERROR)),
        ]);

        $handlerStack = HandlerStack::create($mockHandler);
        $handlerStack->push(Middleware::history($history));

        $client = RequestClient::make();
        $this->setHttpClient(
            $client,
            new Client([
                'base_uri' => 'https://api.oceanengine.com/',
                'handler' => $handlerStack,
            ])
        );

        $response = $client->call(new TestGetApi(), [
            'advertiser_ids' => [1, 2],
            'keyword' => 'demo',
        ]);

        self::assertSame(0, $response->getCode());
        self::assertSame(['ok' => true], $response->getData());
        self::assertCount(1, $history);
        self::assertSame(
            'advertiser_ids=%5B1%2C2%5D&keyword=demo',
            $history[0]['request']->getUri()->getQuery()
        );
    }

    public function testClientCanBeCreatedFromSdkConfig(): void
    {
        $config = SdkConfig::make()
            ->setDomain('https://sandbox.oceanengine.com')
            ->setTimeout(45)
            ->addHeader('X-Trace-Id', 'trace-1')
            ->setAccessToken('token-from-config');

        $client = RequestClient::fromConfig($config);
        $httpClient = $this->invokeGetHttpClient($client);

        // base_uri / timeout 仍然走 Guzzle base 配置
        self::assertSame('https://sandbox.oceanengine.com/', (string) $httpClient->getConfig('base_uri'));
        self::assertSame(45, $httpClient->getConfig('timeout'));

        // headers / access token 现在只存在 SDK 层，请求时 merge——不再写 Guzzle base headers，保护连接池
        self::assertSame('trace-1', $client->getHeaders()['X-Trace-Id']);
        self::assertSame('token-from-config', $client->getAccessToken());
    }

    public function testApplicationAcceptsConfigDuringInitialization(): void
    {
        $config = SdkConfig::make()
            ->setDomain('https://openv2.oceanengine.com')
            ->setTimeout(12)
            ->setAccessToken('app-token');

        $application = Application::init(config: $config);
        $httpClient = $this->invokeGetHttpClient($application->client());

        self::assertSame('https://openv2.oceanengine.com/', (string) $httpClient->getConfig('base_uri'));
        self::assertSame(12, $httpClient->getConfig('timeout'));
        self::assertSame('app-token', $application->client()->getAccessToken());
    }

    public function testRequestApiDomainOverridesDefaultBaseUri(): void
    {
        $history = [];
        $mockHandler = new MockHandler([
            new Response(200, [], json_encode([
                'code' => 0,
                'message' => 'ok',
                'request_id' => 'req-domain',
                'data' => [],
            ], JSON_THROW_ON_ERROR)),
        ]);

        $handlerStack = HandlerStack::create($mockHandler);
        $handlerStack->push(Middleware::history($history));

        $client = RequestClient::fromConfig(
            SdkConfig::make()->setDomain('https://api.oceanengine.com')
        );
        $this->setHttpClient(
            $client,
            new Client([
                'base_uri' => 'https://api.oceanengine.com/',
                'handler' => $handlerStack,
            ])
        );

        $client->call(new TestDomainApi());

        self::assertCount(1, $history);
        self::assertSame(
            'https://sandbox.oceanengine.com/open_api/2/test/domain/',
            (string) $history[0]['request']->getUri()
        );
    }

    private function invokeGetHttpClient(\AdOceanSdk\Kernel\Interface\RequestClientInterface $client): Client
    {
        return $client->getHttpClient();
    }

    private function setHttpClient(\AdOceanSdk\Kernel\Interface\RequestClientInterface $client, Client $httpClient): void
    {
        $client->setHttpClient($httpClient);
    }
}

final class TestGetApi extends RequestApi
{
    protected string $address = 'open_api/2/test/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;
}

final class TestDomainApi extends RequestApi
{
    protected ?string $domain = 'https://sandbox.oceanengine.com';

    protected string $address = 'open_api/2/test/domain/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;
}