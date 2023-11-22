<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 关键词列表，关键词和智能拓流二者必须开启一个
class PromotionUpdatePostParamKeywordsData extends Data
{

    /**
     * @var string $word 关键词。关键词长度不超过30，一个汉字长度计为1，一个英文字符长度计为0.5，不能包含emoji
     */
    public string $word;
    
    /**
     * @var string $match_type 匹配类型。
     */
    public string $match_type;
    
    /**
     * @var float $bid 出价。取值范围：0.2至999.0。
     */
    public float $bid;
    
}