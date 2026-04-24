<?php

declare(strict_types=1);

namespace AdOceanSdk\Kernel\Exceptions;

use AdOceanSdk\Kernel\Interface\ResponseInterface;

/**
 * 业务响应异常：当 API 返回 code != 0 且开启 throwOnApiError 时抛出。
 * 持有原始响应对象与请求 ID，便于排查。
 */
class ApiResponseException extends SdkException
{
    public function __construct(
        private readonly ResponseInterface $response,
        ?string $message = null,
    ) {
        parent::__construct(
            $message ?? $response->getMessage(),
            $response->getCode(),
        );
    }

    public function getResponse(): ResponseInterface
    {
        return $this->response;
    }

    public function getRequestId(): string
    {
        return $this->response->getRequestId();
    }
}
