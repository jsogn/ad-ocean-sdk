<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class UniProjectMonetizationModePostResponseData extends Data
{

    /**
     * @var array<int> $project_ids 更新成功的项目ID集合
     */
    public array $project_ids;

    /**
     * @var array<\AdOceanSdk\UNI\Data\UniProjectMonetizationModePostResponseErrorsData> $errors 更新失败的项目ID列表
     */
    public array $errors;

}