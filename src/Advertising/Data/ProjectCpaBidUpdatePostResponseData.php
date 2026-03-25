<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ProjectCpaBidUpdatePostResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Advertising\Data\ProjectCpaBidUpdatePostResponseErrorsData> $errors 更新失败的项目列表
     */
    public array $errors;

}