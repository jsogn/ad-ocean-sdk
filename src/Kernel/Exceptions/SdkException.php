<?php

declare(strict_types=1);

namespace AdOceanSdk\Kernel\Exceptions;

/**
 * SDK 所有异常的基类。
 * 业务/网络/校验/鉴权异常均继承自此，可通过捕获本类一次拦截 SDK 抛出的全部异常。
 */
class SdkException extends \RuntimeException
{
}
