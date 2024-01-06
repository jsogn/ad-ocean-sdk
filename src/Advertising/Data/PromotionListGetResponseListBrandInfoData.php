<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 品牌信息
class PromotionListGetResponseListBrandInfoData extends Data
{

    /**
     * @var int $yuntu_category_id 云图品牌分类id
     */
    public int $yuntu_category_id;
    
    /**
     * @var array<string> $sub_brand_names 子品牌名称
     */
    public ?array $sub_brand_names;
    
    /**
     * @var array<string> $sub_brand_ids 子品牌id（对应创建和修改广告中的sub_brand_name_ids）
     */
    public ?array $sub_brand_ids;
    
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
    
}