<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Data;

use AdOceanSdk\Kernel\Data\Data;

// 产品信息
class OcProjectMaterialGetResponseProductInfoData extends Data
{

    /**
     * @var array<string> $titles 产品名称
     */
    public array $titles;

    /**
     * @var array<string> $image_ids 产品主图
     */
    public array $image_ids;

    /**
     * @var array<string> $selling_points 产品卖点
     */
    public array $selling_points;

}