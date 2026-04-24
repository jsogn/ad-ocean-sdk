<?php

declare(strict_types=1);

use AdOceanSdk\Application;
use AdOceanSdk\Kernel\Interface\RequestClientInterface;
use AdOceanSdk\Kernel\Middleware\MiddlewareInterface;
use AdOceanSdk\Kernel\Middleware\Pipeline;
use AdOceanSdk\OpenApi;
use AdOceanSdk\OpenApiMethodsTrait;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;
use AdOceanSdk\RequestResponse;
use GuzzleHttp\Client;
use GuzzleHttp\Promise\Create;
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

final class OpenApiRuntimeSurfaceTest extends TestCase
{
    public function testOpenApiExposesConcreteGeneratedMethods(): void
    {
        self::assertTrue(method_exists(OpenApi::class, 'openAdvertiserInfoGetApi'));

        $reflection = new ReflectionClass(OpenApi::class);

        self::assertContains(OpenApiMethodsTrait::class, $reflection->getTraitNames());
        self::assertTrue($reflection->hasMethod('openAdvertiserInfoGetApi'));
    }

    public function testApplicationCanCallRuntimeRegisteredApi(): void
    {
        $client = new class implements RequestClientInterface {
            public ?RequestApi $seenApi = null;

            public array $seenParams = [];

            public function call(RequestApi|string $requestApi, \AdOceanSdk\Kernel\Interface\RequestParamInterface|array $requestParams = []): \AdOceanSdk\Kernel\Interface\ResponseInterface&\AdOceanSdk\Kernel\Data\Data
            {
                $this->seenApi = $requestApi;
                $this->seenParams = $requestParams;

                return RequestResponse::from([
                    'code' => 0,
                    'message' => 'ok',
                    'request_id' => 'runtime-registered',
                    'data' => ['ok' => true],
                ]);
            }

            public function callAsync(RequestApi|string $requestApi, \AdOceanSdk\Kernel\Interface\RequestParamInterface|array $requestParams = []): \GuzzleHttp\Promise\PromiseInterface
            {
                return Create::promiseFor($this->call($requestApi, $requestParams));
            }

            public function callBatch(array $requests, int $concurrency = 10): array
            {
                return [];
            }

            public function request(\AdOceanSdk\RequestMethodEnum|string $method, string $uri, array $params = [], ?\AdOceanSdk\RequestFormatEnum $format = null, array $headers = [], ?int $timeout = null, ?string $domain = null): \AdOceanSdk\Kernel\Interface\ResponseInterface&\AdOceanSdk\Kernel\Data\Data
            {
                return RequestResponse::from([
                    'code' => 0,
                    'message' => 'ok',
                    'request_id' => 'runtime-registered',
                    'data' => ['ok' => true],
                ]);
            }

            public function requestAsync(\AdOceanSdk\RequestMethodEnum|string $method, string $uri, array $params = [], ?\AdOceanSdk\RequestFormatEnum $format = null, array $headers = [], ?int $timeout = null, ?string $domain = null): \GuzzleHttp\Promise\PromiseInterface
            {
                return Create::promiseFor($this->request($method, $uri, $params, $format, $headers, $timeout, $domain));
            }

            public function get(string $uri, array $query = [], array $headers = [], ?int $timeout = null, ?string $domain = null): \AdOceanSdk\Kernel\Interface\ResponseInterface&\AdOceanSdk\Kernel\Data\Data
            {
                return $this->request(\AdOceanSdk\RequestMethodEnum::GET, $uri, $query, \AdOceanSdk\RequestFormatEnum::QUERY, $headers, $timeout, $domain);
            }

            public function post(string $uri, array $data = [], ?\AdOceanSdk\RequestFormatEnum $format = null, array $headers = [], ?int $timeout = null, ?string $domain = null): \AdOceanSdk\Kernel\Interface\ResponseInterface&\AdOceanSdk\Kernel\Data\Data
            {
                return $this->request(\AdOceanSdk\RequestMethodEnum::POST, $uri, $data, $format, $headers, $timeout, $domain);
            }

            public function put(string $uri, array $data = [], ?\AdOceanSdk\RequestFormatEnum $format = null, array $headers = [], ?int $timeout = null, ?string $domain = null): \AdOceanSdk\Kernel\Interface\ResponseInterface&\AdOceanSdk\Kernel\Data\Data
            {
                return $this->request(\AdOceanSdk\RequestMethodEnum::PUT, $uri, $data, $format, $headers, $timeout, $domain);
            }

            public function patch(string $uri, array $data = [], ?\AdOceanSdk\RequestFormatEnum $format = null, array $headers = [], ?int $timeout = null, ?string $domain = null): \AdOceanSdk\Kernel\Interface\ResponseInterface&\AdOceanSdk\Kernel\Data\Data
            {
                return $this->request(\AdOceanSdk\RequestMethodEnum::PATCH, $uri, $data, $format, $headers, $timeout, $domain);
            }

            public function delete(string $uri, array $params = [], array $headers = [], ?int $timeout = null, ?string $domain = null): \AdOceanSdk\Kernel\Interface\ResponseInterface&\AdOceanSdk\Kernel\Data\Data
            {
                return $this->request(\AdOceanSdk\RequestMethodEnum::DELETE, $uri, $params, \AdOceanSdk\RequestFormatEnum::QUERY, $headers, $timeout, $domain);
            }

            public function setAccessToken(string $token): static
            {
                return $this;
            }

            public function getAccessToken(): string
            {
                return '';
            }

            public function setHeaders(array $headers): static
            {
                return $this;
            }

            public function addHeader(string $key, mixed $value): static
            {
                return $this;
            }

            public function getHeaders(): array
            {
                return [];
            }

            public function setDomain(string $domain): static
            {
                return $this;
            }

            public function getDomain(): string
            {
                return '';
            }

            public function setTimeout(int $timeout): static
            {
                return $this;
            }

            public function getTimeout(): int
            {
                return 0;
            }

            public function setHttpClient(Client $client): static
            {
                return $this;
            }

            public function getHttpClient(): Client
            {
                return new Client();
            }

            public function setHttpClientOptions(array $options): static
            {
                return $this;
            }

            public function setLogger(LoggerInterface $logger): static
            {
                return $this;
            }

            public function getLogger(): LoggerInterface
            {
                return new NullLogger();
            }

            public function pipeline(): Pipeline
            {
                return new Pipeline();
            }

            public function addMiddleware(MiddlewareInterface $middleware): static
            {
                return $this;
            }

            public function prependMiddleware(MiddlewareInterface $middleware): static
            {
                return $this;
            }
        };

        $application = Application::init($client)
            ->registerApi('customApi', RuntimeRegisteredApi::class);

        $response = $application->apis()->customApi(['custom_param' => 123]);

        self::assertSame(0, $response->getCode());
        self::assertSame(['ok' => true], $response->getData());
        self::assertInstanceOf(RuntimeRegisteredApi::class, $client->seenApi);
        self::assertSame(['custom_param' => 123], $client->seenParams);
    }
}

final class RuntimeRegisteredApi extends RequestApi
{
    protected string $address = 'open_api/2/runtime/registered/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;
}