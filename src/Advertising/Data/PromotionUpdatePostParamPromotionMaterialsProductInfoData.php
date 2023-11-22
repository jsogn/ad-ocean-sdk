<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 产品信息
class PromotionUpdatePostParamPromotionMaterialsProductInfoData extends Data
{

    /**
     * @var array<string> $titles 产品名称，字数限制：[1-20]，数组上限为1
     */
    public array $titles;
    
    /**
     * @var array<string> $image_ids 产品主图，尺寸要求108*108，上限10个可通过【获取图片素材】接口获得
     */
    public array $image_ids;
    
    /**
     * @var array<string> $selling_points 产品卖点，字数限制：[6-9]，数组上限为10
     */
    public array $selling_points;
    
    /**
     * @var array<int> $word_list 动态词包ID，可使用【查询动态词包接口】获得，结合标题中的词包格式您需要填写相同个数与顺序的词包ID，如果实际ID顺序与标题中词包名顺序不一致我们将以词包ID顺序为准。
     */
    public array $word_list;
    
}