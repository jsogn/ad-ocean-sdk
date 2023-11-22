<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 批量更新广告启用状态，包含广告ID和操作状态，list长度限制1～10
class MaterialStatusUpdatePostParamData extends Data
{

    /**
     * @var int $material_id 素材ID
     */
    public int $material_id;
    
    /**
     * @var string $opt_status 允许值：DISABLE暂停、ENABLE启用
     */
    public string $opt_status;
    
}