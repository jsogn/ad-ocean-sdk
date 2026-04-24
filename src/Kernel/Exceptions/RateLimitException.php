<?php

declare(strict_types=1);

namespace AdOceanSdk\Kernel\Exceptions;

/**
 * 限流异常：HTTP 429 或业务限流码命中时抛出。
 */
class RateLimitException extends ApiResponseException
{
}
