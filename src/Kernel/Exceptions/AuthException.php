<?php

declare(strict_types=1);

namespace AdOceanSdk\Kernel\Exceptions;

/**
 * 鉴权异常：HTTP 401 / Token 失效场景。
 * 当 throwOnApiError 开启且业务码命中鉴权类（默认 40100/40103/40105）时抛出。
 */
class AuthException extends ApiResponseException
{
}
