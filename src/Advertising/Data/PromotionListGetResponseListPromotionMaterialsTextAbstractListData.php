<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 文本摘要信息，单广告可添加1-10个，长度25-45个字
class PromotionListGetResponseListPromotionMaterialsTextAbstractListData extends Data
{

    /**
     * @var string $abstract_text 文本摘要内容,单广告可添加1-10个，长度25-45个字， 两个英文字符占1位。
     */
    public string $abstract_text;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionListGetResponseListPromotionMaterialsTextAbstractListBidwordListData> $bidword_list 搜索关键词列表
     */
    public array $bidword_list;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionListGetResponseListPromotionMaterialsTextAbstractListWordListData> $word_list 动态词包ID，可使用 【查询动态词包接口】 获得，结合文本摘要内容中的词包格式您需要填写相同个数与顺序的词包ID，如果实际ID顺序与文本摘要内容中词包名顺序不一致我们将以词包ID顺序为准。
     */
    public array $word_list;
    
}