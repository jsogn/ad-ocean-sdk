<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 图文素材信息，当ad_type=ALL时，支持上限10个；当ad_type=SEARCH时，支持上限30个
class PromotionCreatePostParamPromotionMaterialsCarouselMaterialListData extends Data
{

    /**
     * @var string $carousel_id 图文id，可通过【获取图文素材】接口获得
     */
    public string $carousel_id;
    
}