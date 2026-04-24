<?php

declare(strict_types=1);

namespace AdOceanSdk;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\OpenApiInterface;
use AdOceanSdk\Kernel\Interface\RequestClientInterface;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use RuntimeException;

/**
 * class OpenApi
 * 开放接口调度类
 * @see OpenApiMethodsTrait
 */
class OpenApi implements OpenApiInterface
{
    use OpenApiMethodsTrait;

    private RequestClientInterface $client;

    /** @var array<string, array{call: class-string<RequestApi>}|class-string<RequestApi>> */
    private array $apiMap;

    /**
     * @param array<string, class-string<RequestApi>> $extraApiMap 用户额外注册的 API 名 => RequestApi 子类
     */
    public function __construct(RequestClientInterface $client, array $extraApiMap = [])
    {
        $this->client = $client;
        $this->apiMap = include __DIR__ . '/api_config.php';

        foreach ($extraApiMap as $name => $apiClass) {
            $this->register($name, $apiClass);
        }
    }

    /**
     * 运行时注册自定义 API。
     *
     * @param class-string<RequestApi> $apiClass
     */
    public function register(string $name, string $apiClass): self
    {
        $this->apiMap[$name] = ['call' => $apiClass];
        return $this;
    }

    /**
     * 允许运行时注册的 API 通过 `$openApi->customApi($params)` 形式调用。
     *
     * 生成的方法仍然走 trait；这里只兜底动态注册项。
     */
    public function __call(string $name, array $arguments): ResponseInterface&Data
    {
        return $this->callApi($name, $arguments[0] ?? []);
    }

    /**
     * 由生成的 trait 方法转发到此，集中调度具体 RequestApi。
     */
    protected function callApi(string $name, mixed $params = []): ResponseInterface&Data
    {
        if (!isset($this->apiMap[$name])) {
            throw new RuntimeException("Unknown OpenApi method: {$name}");
        }

        $entry = $this->apiMap[$name];
        $apiClass = is_array($entry) ? $entry['call'] : $entry;

        /** @var RequestApi $requestApi */
        $requestApi = $apiClass::make();

        return $requestApi->setClient($this->client)->call($params);
    }
}