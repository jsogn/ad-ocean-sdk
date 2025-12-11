<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class PromotionCreatePostResponseData extends Data
{

    /**
     * @var int $promotion_id 广告ID
     */
    public int $promotion_id;

    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionCreatePostResponseErrorKeywordsListData> $error_keywords_list 设置失败的搜索广告关键词列表
     */
    public ?array $error_keywords_list = null;

}
