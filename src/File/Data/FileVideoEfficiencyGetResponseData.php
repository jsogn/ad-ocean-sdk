<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class FileVideoEfficiencyGetResponseData extends Data
{

    /**
     * @var array<string> $inefficient_material_ids 低效素材id列表
     */
    public array $inefficient_material_ids;
    
}