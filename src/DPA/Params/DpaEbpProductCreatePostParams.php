<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Params;

use AdOceanSdk\RequestParams;

class DpaEbpProductCreatePostParams extends RequestParams
{

    /**
     * @var int $account_id 账户ID，需传入商品库归属的升级版组织id，创建的商品将归属于入参升级版组织，默认下级组织的账户可以使用
     */
    public int $account_id;

    /**
     * @var string $account_type 账户类型 可选值: EBP 升级版巨量引擎工作台组织
     */
    public string $account_type;

    /**
     * @var int $platform_id 商品库ID
     */
    public int $platform_id;

    /**
     * @var \AdOceanSdk\DPA\Data\DpaEbpProductCreatePostParamProductInfoData $product_info 商品详情，包括商品库基础字段、落地页、品牌、商户、价格以及其他字段信息，以下所有字段均包含在该结构体下，且不同类型商品库填入字段存在差异，具体格式见下方字段详情
     */
    public \AdOceanSdk\DPA\Data\DpaEbpProductCreatePostParamProductInfoData $product_info;

}