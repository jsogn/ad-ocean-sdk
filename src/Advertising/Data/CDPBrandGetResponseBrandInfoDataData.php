<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 品牌信息
class CDPBrandGetResponseBrandInfoDataData extends Data
{

    /**
     * @var int $cdp_brand_id cdp品牌id
     */
    public int $cdp_brand_id;
    
    /**
     * @var string $cdp_brand_name cdp品牌信息
     */
    public string $cdp_brand_name;
    
    /**
     * @var int $ecom_brand_id 电商品牌id
     */
    public int $ecom_brand_id;
    
    /**
     * @var int $brand_name_id 云图品牌id
     */
    public int $brand_name_id;
    
    /**
     * @var object $sub_brand_map 子品牌信息名称和id
     */
    public object $sub_brand_map;
    
}