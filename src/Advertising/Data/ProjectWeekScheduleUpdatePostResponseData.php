<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ProjectWeekScheduleUpdatePostResponseData extends Data
{

    /**
     * @var array<int> $project_ids 更新成功的项目ID集合
     */
    public array $project_ids;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\ProjectWeekScheduleUpdatePostResponseErrorsData> $errors 更新失败的项目ID列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\ProjectWeekScheduleUpdatePostResponseErrorsData::class)]
    public array $errors;
    
}