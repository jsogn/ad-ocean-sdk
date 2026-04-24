<?php

declare(strict_types=1);

namespace AdOceanSdk;

use AdOceanSdk\Kernel\Interface\RequestClientInterface;

class Application
{
    protected RequestClientInterface $client;

    protected ?OpenApi $openApi = null;

    /** @var array<string, class-string<RequestApi>> 用户自定义注册到 OpenApi 的额外 API */
    protected array $extraApiMap = [];

    private function __construct(?RequestClientInterface $client, ?SdkConfig $config = null)
    {
        if ($client) {
            $this->client = $client;
        } elseif ($config) {
            $this->client = RequestClient::fromConfig($config);
        } else {
            $this->client = RequestClient::make();
        }
    }

    public static function init(?RequestClientInterface $client = null, ?SdkConfig $config = null): self
    {
        return new self($client, $config);
    }

    /**
     * 注册自定义 API 到 OpenApi 调度器。
     *
     * @param class-string<RequestApi> $apiClass
     */
    public function registerApi(string $name, string $apiClass): self
    {
        $this->extraApiMap[$name] = $apiClass;
        $this->openApi = null; // 重建以应用新映射
        return $this;
    }

    public function apis(): OpenApi
    {
        if (!$this->openApi) {
            $this->openApi = new OpenApi($this->client, $this->extraApiMap);
        }

        return $this->openApi;
    }

    public function client(): RequestClientInterface
    {
        return $this->client;
    }
}
