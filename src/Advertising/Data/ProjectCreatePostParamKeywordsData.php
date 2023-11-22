<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 待添加搜索关键词列表，一个项目最多可添加1000个
class ProjectCreatePostParamKeywordsData extends Data
{

    /**
     * @var string $word 关键词,关键词长度不超过30，一个汉字长度计为1，一个英文字符长度计为0.5，不能包含emoji
     */
    public string $word;
    
    /**
     * @var string $bid_type 出价类型。 允许值:FEED_TO_SEARCH搜索快投（默认值）
     */
    public string $bid_type;
    
    /**
     * @var string $match_type 匹配类型。 允许值:PHRASE短语匹配，EXTENSIVE广泛匹配，PRECISION精准匹配
     */
    public string $match_type;
    
}