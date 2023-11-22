<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 错误list，项目为分块更新，存在部分内容更新失败，部分内容更新成功- 若更新成功，ErrorList为空数组- 若更新失败，ErrorList包含错误的模块和失败原因
class ProjectUpdatePostResponseErrorListData extends Data
{

    /**
     * @var string $object_type 错误对象类型，返回值：BUDGET预算、PROJECT_SETTING项目设置
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