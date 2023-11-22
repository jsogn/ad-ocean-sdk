<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 创意组件信息。数量上限为1
class PromotionUpdatePostParamPromotionMaterialsComponentMaterialListData extends Data
{

    /**
     * @var int $component_id 组件id，通过【查询组件列表】接口获取。
     */
    public int $component_id;
    
}