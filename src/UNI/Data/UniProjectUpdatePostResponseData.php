<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class UniProjectUpdatePostResponseData extends Data
{

    /**
     * @var int $project_id 项目id
     */
    public int $project_id;

    /**
     * @var array<\AdOceanSdk\UNI\Data\UniProjectUpdatePostResponseErrorListData> $error_list 错误list，项目为分块更新，存在部分内容更新失败，部分内容更新成功若更新成功，ErrorList为空数组若更新失败，ErrorList包含错误的模块和失败原因
     */
    public array $error_list;

}