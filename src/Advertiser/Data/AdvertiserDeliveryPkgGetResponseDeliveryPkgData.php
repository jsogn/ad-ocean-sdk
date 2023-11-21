<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// 推广产品资质信息
class AdvertiserDeliveryPkgGetResponseDeliveryPkgData extends Data
{

    /**
     * @var int $pkg_id 推广产品组id
     */
    public int $pkg_id;
    
    /**
     * @var int $config_id 来自【推广产品资质规则配置查询接口】，行业的资质规则中的config_id
     */
    public int $config_id;
    
    /**
     * @var string $product_name 用户提交的推广产品名称
     */
    public string $product_name;
    
    /**
     * @var string $status 推广产品整组的审核状态，标识该推广产品是否审核通过 可选值:
     */
    public string $status;
    
    /**
     * @var array<int> $industry_id 一级到三级行业id
     */
    public array $industry_id;
    
    /**
     * @var array<string> $industry_name 一级到三级行业名称
     */
    public array $industry_name;
    
    /**
     * @var \AdOceanSdk\Advertiser\Data\AdvertiserDeliveryPkgGetResponseDeliveryPkgNecessaryCombineData $necessary_combine 必填资质模块
     */
    public \AdOceanSdk\Advertiser\Data\AdvertiserDeliveryPkgGetResponseDeliveryPkgNecessaryCombineData $necessary_combine;
    
    /**
     * @var array<\AdOceanSdk\Advertiser\Data\AdvertiserDeliveryPkgGetResponseDeliveryPkgUnnecessaryCombinesData> $unnecessary_combines 选填资质模块
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertiser\Data\AdvertiserDeliveryPkgGetResponseDeliveryPkgUnnecessaryCombinesData::class)]
    public array $unnecessary_combines;
    
    /**
     * @var \AdOceanSdk\Advertiser\Data\AdvertiserDeliveryPkgGetResponseDeliveryPkgPermissionData $permission 权限信息
     */
    public \AdOceanSdk\Advertiser\Data\AdvertiserDeliveryPkgGetResponseDeliveryPkgPermissionData $permission;
    
}