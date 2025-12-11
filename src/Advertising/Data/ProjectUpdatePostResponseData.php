<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ProjectUpdatePostResponseData extends Data
{

    /**
     * @var int $project_id 项目id
     */
    public int $project_id;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\ProjectUpdatePostResponseErrorListData> $error_list 错误list，项目为分块更新，存在部分内容更新失败，部分内容更新成功- 若更新成功，ErrorList为空数组- 若更新失败，ErrorList包含错误的模块和失败原因
     */
    public array $error_list;
    
}