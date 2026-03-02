<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 商家信息
class DpaEbpClueProductListGetResponseProductsShopKeeperInfoData extends Data
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
     * @var string $address 商户地址
     */
    public string $address;

    /**
     * @var string $contact 联系人
     */
    public string $contact;

    /**
     * @var string $service_phone 客服电话
     */
    public string $service_phone;

    /**
     * @var \AdOceanSdk\DPA\Data\DpaEbpClueProductListGetResponseProductsShopKeeperInfoTargetUrlData $target_url 
     */
    public \AdOceanSdk\DPA\Data\DpaEbpClueProductListGetResponseProductsShopKeeperInfoTargetUrlData $target_url;

    /**
     * @var string $logo 商家Logo
     */
    public string $logo;

}