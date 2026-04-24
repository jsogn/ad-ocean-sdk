<?php

declare(strict_types=1);

namespace AdOceanSdk\Kernel\Support;

use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestFormatEnum;
use AdOceanSdk\RequestMethodEnum;

/**
 * RequestClient::request()/get()/post() 等便捷入口的内部适配器。
 *
 * 它把“直接 HTTP 请求”包装成普通 RequestApi，
 * 从而复用现有 middleware pipeline、鉴权、重试、异常与解码逻辑。
 */
final class InlineRequestApi extends RequestApi
{
    private function __construct()
    {
        parent::__construct();
    }

    public static function make(): static
    {
        return new static();
    }

    public static function fromRequest(
        string $address,
        RequestMethodEnum $method,
        ?RequestFormatEnum $requestFormat = null,
        array $headers = [],
        ?int $timeout = null,
        ?string $domain = null,
    ): self {
        $api = new self();
        $api->address = $address;
        $api->method = $method;
        $api->requestFormat = $requestFormat;
        $api->headers = $headers;
        $api->timeout = $timeout;
        $api->domain = $domain;

        return $api;
    }
}