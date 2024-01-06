<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 锚点信息
class PromotionListGetResponseListPromotionMaterialsAnchorMaterialListData extends Data
{

    /**
     * @var string $anchor_id 锚点id
     */
    public string $anchor_id;
    
    /**
     * @var string $anchor_type 锚点类型
     */
    public string $anchor_type;
    
}