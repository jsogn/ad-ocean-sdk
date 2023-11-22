<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 低效素材id列表
class FileMaterialListGetResponseMaterialsData extends Data
{

    /**
     * @var int $material_id 请求的素材 id
     */
    public int $material_id;
    
    /**
     * @var array<string> $material_properties 素材属性标签
     */
    public array $material_properties;
    
}