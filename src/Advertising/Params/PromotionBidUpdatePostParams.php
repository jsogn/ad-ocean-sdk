<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Params;

use AdOceanSdk\RequestParams;

class PromotionBidUpdatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告账户id
     */
    public int $advertiser_id;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionBidUpdatePostParamData> $data 批量修改出价，list长度限制1～10
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\PromotionBidUpdatePostParamData::class)]
    public array $data;
    
}