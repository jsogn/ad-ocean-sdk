<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ProjectDeletePostResponseData extends Data
{

    /**
     * @var array<int> $project_ids 删除成功的广告项目ID集合
     */
    public array $project_ids;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\ProjectDeletePostResponseErrorsData> $errors 删除失败的广告项目列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\ProjectDeletePostResponseErrorsData::class)]
    public array $errors;
    
}