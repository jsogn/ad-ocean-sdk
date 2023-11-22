<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ProjectStatusUpdatePostResponseData extends Data
{

    /**
     * @var array<int> $project_ids 更新成功的广告项目ID集合
     */
    public array $project_ids;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\ProjectStatusUpdatePostResponseErrorsData> $errors 更新失败的广告项目列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\ProjectStatusUpdatePostResponseErrorsData::class)]
    public array $errors;
    
}