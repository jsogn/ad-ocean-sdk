<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 品牌信息（仅关联云图和cdp的广告主可以按需填写品牌及所属类别信息）
class PromotionCreatePostParamBrandInfoData extends Data
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