<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class PromotionBidUpdatePostResponseData extends Data
{

    /**
     * @var array<int> $promotion_ids 更新成功的广告ID集合
     */
    public array $promotion_ids;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionBidUpdatePostResponseErrorsData> $errors 更新失败的广告列表
     */
    public array $errors;
    
}