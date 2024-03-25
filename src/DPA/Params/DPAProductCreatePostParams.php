<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Params;

use AdOceanSdk\RequestParams;

class DPAProductCreatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var int $platform_id 商品库ID
     */
    public int $platform_id;
    
    /**
     * @var object $product_info 商品详情，包括商品库基础字段、落地页、品牌、商户、价格以及其他字段信息，以下所有字段均包含在该结构体下，且不同类型商品库填入字段存在差异，具体格式见下方字段详情
     */
    public object $product_info;
    
}