<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Data;

use AdOceanSdk\Kernel\Data\Data;

// 品牌信息，仅关联云图的客户可以按需填写，以下参数可通过【获取关联云图的投放账户信息】获取
class UniProjectCreatePostParamBrandInfoData extends Data
{

    /**
     * @var int $yuntu_category_id 品牌分类id
     */
    public int $yuntu_category_id;

    /**
     * @var int $cdp_brand_id cdp品牌id
     */
    public int $cdp_brand_id;

    /**
     * @var int $ecom_brand_id 电商品牌id
     */
    public int $ecom_brand_id;

    /**
     * @var int $brand_name_id 云图品牌id
     */
    public int $brand_name_id;

    /**
     * @var string $cdp_brand_name cdp品牌名称
     */
    public string $cdp_brand_name;

    /**
     * @var array<string> $sub_brand_names 子品牌名称
     */
    public array $sub_brand_names;

    /**
     * @var array<string> $sub_brand_name_ids 子品牌id
     */
    public array $sub_brand_name_ids;

}