<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 品牌信息
class DPADetailGetGetResponseListBrandInfoData extends Data
{

    /**
     * @var string $brand_id 品牌ID
     */
    public string $brand_id;
    
    /**
     * @var string $brand_name 品牌名称
     */
    public string $brand_name;
    
    /**
     * @var string $en_brand 英文品牌名
     */
    public string $en_brand;
    
    /**
     * @var string $brand_logo 品牌logo
     */
    public string $brand_logo;
    
    /**
     * @var string $brand_url PC端品牌落地页URL
     */
    public string $brand_url;
    
    /**
     * @var string $brand_url_mobile H5页面品牌落地页URL
     */
    public string $brand_url_mobile;
    
    /**
     * @var string $brand_url_android_app Android应用品牌直达调起链接
     */
    public string $brand_url_android_app;
    
    /**
     * @var string $brand_url_ios_app IOS应用品牌直达调起链接
     */
    public string $brand_url_ios_app;
    
    /**
     * @var string $brand_url_universal_link IOS应用品牌调起ulink链接
     */
    public string $brand_url_universal_link;
    
}