<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 商户信息
class DPADetailGetGetResponseListShopKeeperInfoData extends Data
{

    /**
     * @var string $shop_keeper_id 商户ID
     */
    public string $shop_keeper_id;
    
    /**
     * @var string $shop_keeper_name 商户名称
     */
    public string $shop_keeper_name;
    
    /**
     * @var string $shop_keeper_url PC端商户落地页URL
     */
    public string $shop_keeper_url;
    
    /**
     * @var string $shop_keeper_url_mobile H5页面商户落地页URL
     */
    public string $shop_keeper_url_mobile;
    
    /**
     * @var string $shop_keeper_url_android_app Android应用商户直达调起链接
     */
    public string $shop_keeper_url_android_app;
    
    /**
     * @var string $shop_keeper_url_ios_app IOS应用商户直达调起链接
     */
    public string $shop_keeper_url_ios_app;
    
    /**
     * @var string $shop_keeper_url_universal_link IOS应用商户调起ulink链接
     */
    public string $shop_keeper_url_universal_link;
    
    /**
     * @var string $address 商户地址
     */
    public string $address;
    
}