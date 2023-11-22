<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class PromotionDeepBidUpdatePostResponseData extends Data
{

    /**
     * @var array<int> $promotion_ids 更新成功的广告ID集合
     */
    public array $promotion_ids;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionDeepBidUpdatePostResponseErrorsData> $errors 更新失败的广告列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\PromotionDeepBidUpdatePostResponseErrorsData::class)]
    public array $errors;
    
}