<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Data;

use AdOceanSdk\Kernel\Data\Data;

// 错误list，项目为分块更新，存在部分内容更新失败，部分内容更新成功若更新成功，ErrorList为空数组若更新失败，ErrorList包含错误的模块和失败原因
class UniProjectUpdatePostResponseErrorListData extends Data
{

    /**
     * @var string $object_type 
     */
    public string $object_type;

    /**
     * @var int $error_code 错误码
     */
    public int $error_code;

    /**
     * @var string $error_message 错误信息
     */
    public string $error_message;

}