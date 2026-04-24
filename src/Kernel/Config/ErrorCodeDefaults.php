<?php

declare(strict_types=1);

namespace AdOceanSdk\Kernel\Config;

/**
 * SDK 默认业务错误码定义。
 * 
 * 集中管理 ApiErrorMiddleware 的默认错误码，避免在多个文件中重复定义。
 */
final class ErrorCodeDefaults
{
    /**
     * 鉴权失败的业务错误码（用于区分 AuthException）。
     * 
     * @var list<int>
     */
    public const AUTH_ERROR_CODES = [40100, 40103, 40105];

    /**
     * 限流的业务错误码（用于区分 RateLimitException）。
     * 
     * @var list<int>
     */
    public const RATE_LIMIT_ERROR_CODES = [40000, 40004, 40110, 40000, 50000, 50001];

    private function __construct()
    {
        // 防止实例化
    }
}
