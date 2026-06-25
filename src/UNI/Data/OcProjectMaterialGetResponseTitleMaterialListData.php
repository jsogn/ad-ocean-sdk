<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Data;

use AdOceanSdk\Kernel\Data\Data;

// 标题素材信息
class OcProjectMaterialGetResponseTitleMaterialListData extends Data
{

    /**
     * @var string $title 创意标题
     */
    public string $title;

    /**
     * @var int $material_id 创意id
     */
    public int $material_id;

}