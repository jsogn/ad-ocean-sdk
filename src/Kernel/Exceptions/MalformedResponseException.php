<?php

declare(strict_types=1);

namespace AdOceanSdk\Kernel\Exceptions;

use Throwable;

/**
 * 解析响应体失败：HTTP 200 但 body 不是合法 JSON / 不是对象。
 *
 * 与 NetworkException 区分：网络通了，但响应不可用。
 */
class MalformedResponseException extends SdkException
{
    public function __construct(
        string $message,
        private readonly string $rawBody = '',
        ?Throwable $previous = null,
    ) {
        parent::__construct($message, 0, $previous);
    }

    public function getRawBody(): string
    {
        return $this->rawBody;
    }
}
