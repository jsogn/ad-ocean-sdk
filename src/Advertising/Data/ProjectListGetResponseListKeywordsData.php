<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 搜索关键词列表
class ProjectListGetResponseListKeywordsData extends Data
{

    /**
     * @var string $word 关键词
     */
    public string $word;
    
    /**
     * @var string $bid_type 出价类型。 允许值:FEED_TO_SEARCH 搜索快投
     */
    public string $bid_type;
    
    /**
     * @var string $match_type 匹配类型，允许值:PHRASE短语匹配，EXTENSIVE广泛匹配，PRECISION精准匹配
     */
    public string $match_type;
    
}