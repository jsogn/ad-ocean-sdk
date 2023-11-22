<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 标题素材，上限10个，非直播链路必填
class PromotionCreatePostParamPromotionMaterialsTitleMaterialListData extends Data
{

    /**
     * @var string $title 创意标题，如果要使用动态词包，格式：“XXX{词包名}XXX{词包名}XXX”。请注意当您使用动态词包时，需在word_list字段中按顺序传入词包ID，并且在一个标题中最多使用两个动态词包。长度为5-30个字, 两个英文字符占1位。
     */
    public string $title;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionCreatePostParamPromotionMaterialsTitleMaterialListBidwordListData> $bidword_list 搜索关键词列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\PromotionCreatePostParamPromotionMaterialsTitleMaterialListBidwordListData::class)]
    public array $bidword_list;
    
    /**
     * @var array<int> $word_list 动态词包ID，可使用【查询动态词包接口】获得，结合标题中的词包格式您需要填写相同个数与顺序的词包ID，如果实际ID顺序与标题中词包名顺序不一致我们将以词包ID顺序为准。
     */
    public array $word_list;
    
}