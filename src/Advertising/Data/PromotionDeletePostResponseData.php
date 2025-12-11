<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class PromotionDeletePostResponseData extends Data
{

    /**
     * @var array<int> $promotion_ids 删除成功的广告ID集合
     */
    public array $promotion_ids;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionDeletePostResponseErrorsData> $errors 删除失败的广告列表
     */
    public array $errors;
    
}