<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 设置失败的搜索广告关键词列表
class PromotionCreatePostResponseErrorKeywordsListData extends Data
{

    /**
     * @var string $error_keyword 设置失败的搜索广告关键词
     */
    public string $error_keyword;
    
    /**
     * @var string $error_message 设置失败的原因
     */
    public string $error_message;
    
}