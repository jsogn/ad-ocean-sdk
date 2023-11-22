<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class PromotionUpdatePostResponseData extends Data
{

    /**
     * @var int $promotion_id 广告ID
     */
    public int $promotion_id;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionUpdatePostResponseErrorListData> $error_list 错误list，广告为分块更新，存在部分内容更新失败，部分内容更新成功的的情况若广告更新成功，则返回为空数组若更新失败，则返回错误的部分及原因
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\PromotionUpdatePostResponseErrorListData::class)]
    public array $error_list;
    
}