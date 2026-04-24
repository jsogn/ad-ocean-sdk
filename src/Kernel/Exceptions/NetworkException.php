<?php

declare(strict_types=1);

namespace AdOceanSdk\Kernel\Exceptions;

use Throwable;

/**
 * 网络层异常：Guzzle 请求失败时抛出。
 * 通过 $previous 保留原始 GuzzleException，便于上层判断（连接超时/DNS/HTTP 5xx 等）。
 */
class NetworkException extends SdkException
{
    public function __construct(
        string $message,
        private readonly string $requestMethod = '',
        private readonly string $requestUri = '',
        ?Throwable $previous = null
    ) {
        parent::__construct($message, 0, $previous);
    }

    public function getRequestMethod(): string
    {
        return $this->requestMethod;
    }

    public function getRequestUri(): string
    {
        return $this->requestUri;
    }
}
