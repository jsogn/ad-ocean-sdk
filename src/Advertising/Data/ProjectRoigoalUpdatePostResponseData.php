<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ProjectRoigoalUpdatePostResponseData extends Data
{

    /**
     * @var array<int> $project_ids 更新成功的项目ID列表
     */
    public array $project_ids;

    /**
     * @var array<\AdOceanSdk\Advertising\Data\ProjectRoigoalUpdatePostResponseErrorsData> $errors 更新失败的项目ID列表及失败原因
     */
    public array $errors;

}