<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 商家信息
class DPAClueProductListGetResponseProductsShopKeeperInfoData extends Data
{

    /**
     * @var string $shop_keeper_id 商家ID
     */
    public string $shop_keeper_id;
    
    /**
     * @var string $shop_keeper_name 商家名称
     */
    public string $shop_keeper_name;
    
    /**
     * @var string $shop_keeper_logo 商家logo
     */
    public string $shop_keeper_logo;
    
    /**
     * @var string $shop_keeper_url 商家落地页
     */
    public string $shop_keeper_url;
    
    /**
     * @var string $shop_keeper_url_universal_link 商家落地页universal link
     */
    public string $shop_keeper_url_universal_link;
    
    /**
     * @var string $shop_keeper_url_mobile 商家H5落地页
     */
    public string $shop_keeper_url_mobile;
    
    /**
     * @var string $shop_keeper_url_android_app 商家安卓落地页
     */
    public string $shop_keeper_url_android_app;
    
    /**
     * @var string $shop_keeper_url_ios_app 商家iOS落地页
     */
    public string $shop_keeper_url_ios_app;
    
    /**
     * @var string $address 商家地址
     */
    public string $address;
    
}