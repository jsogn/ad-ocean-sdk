<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 批量修改深度出价，list长度限制1～10
class ProjectDeepCpaBidUpdatePostParamData extends Data
{

    /**
     * @var int $project_id 项目ID
     */
    public int $project_id;

    /**
     * @var float $deepbid 深度出价，单位“元”，精度：两位小数。
     */
    public float $deepbid;

}