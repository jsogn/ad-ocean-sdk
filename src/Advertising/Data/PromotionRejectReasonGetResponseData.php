<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class PromotionRejectReasonGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionRejectReasonGetResponseListData> $list 广告审核建议列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\PromotionRejectReasonGetResponseListData::class)]
    public array $list;
    
}