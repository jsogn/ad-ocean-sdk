<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 广告审核建议列表
class PromotionRejectReasonGetResponseListData extends Data
{

    /**
     * @var int $promotion_id 广告ID
     */
    public int $promotion_id;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionRejectReasonGetResponseListPromotionRejectData> $promotion_reject 广告维度审核建议列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\PromotionRejectReasonGetResponseListPromotionRejectData::class)]
    public array $promotion_reject;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionRejectReasonGetResponseListMaterialRejectData> $material_reject 素材维度审核建议列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\PromotionRejectReasonGetResponseListMaterialRejectData::class)]
    public array $material_reject;
    
}