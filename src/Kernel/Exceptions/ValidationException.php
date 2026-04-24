<?php

declare(strict_types=1);

namespace AdOceanSdk\Kernel\Exceptions;

/**
 * 参数校验异常。
 * 与历史 RequestParamValidateException 功能等价；推荐新代码使用本类。
 */
class ValidationException extends SdkException
{
    protected $code = 999999;

    protected $message = 'request params are invalid';
}
