<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 创意组件信息。数量上限为1
class PromotionCreatePostParamPromotionMaterialsComponentMaterialListData extends Data
{

    /**
     * @var int $component_id 组件id，通过【查询组件列表】接口获取。支持素材类型为横版视频、竖版视频
     */
    public int $component_id;
    
}