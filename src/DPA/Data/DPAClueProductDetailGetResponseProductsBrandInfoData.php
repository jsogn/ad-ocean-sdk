<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 品牌信息
class DPAClueProductDetailGetResponseProductsBrandInfoData extends Data
{

    /**
     * @var string $brand_url 品牌默认落地页
     */
    public string $brand_url;
    
    /**
     * @var string $brand_url_mobile 品牌H5落地页
     */
    public string $brand_url_mobile;
    
    /**
     * @var string $brand_url_android_app 品牌安卓落地页
     */
    public string $brand_url_android_app;
    
    /**
     * @var string $brand_url_ios_app 品牌iOS落地页
     */
    public string $brand_url_ios_app;
    
    /**
     * @var string $brand_id 品牌ID
     */
    public string $brand_id;
    
    /**
     * @var string $brand_name 品牌名称
     */
    public string $brand_name;
    
    /**
     * @var string $en_brand 品牌英文名
     */
    public string $en_brand;
    
    /**
     * @var string $brand_url_universal_link 品牌落地页universal link
     */
    public string $brand_url_universal_link;
    
    /**
     * @var string $brand_logo 品牌logo
     */
    public string $brand_logo;
    
}