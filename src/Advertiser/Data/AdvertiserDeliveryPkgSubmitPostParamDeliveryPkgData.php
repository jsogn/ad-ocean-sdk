<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// 推广产品资质
class AdvertiserDeliveryPkgSubmitPostParamDeliveryPkgData extends Data
{

    /**
     * @var int $pkg_id 推广产品组id ① 针对新增的场景传0即可  ② 提交推广产品资质时系统会返回生成的pkg_id，针对编辑的场景，再此传入对应需要编辑的pkg_id即可
     */
    public int $pkg_id;
    
    /**
     * @var int $config_id 来自【推广产品资质规则配置查询接口】，行业的资质规则中的config_id
     */
    public int $config_id;
    
    /**
     * @var string $product_name 推广产品资质的产品名称，字符长度1~128
     */
    public string $product_name;
    
    /**
     * @var \AdOceanSdk\Advertiser\Data\AdvertiserDeliveryPkgSubmitPostParamDeliveryPkgNecessaryCombineData $necessary_combine 必填资质模块
     */
    public \AdOceanSdk\Advertiser\Data\AdvertiserDeliveryPkgSubmitPostParamDeliveryPkgNecessaryCombineData $necessary_combine;
    
    /**
     * @var array<\AdOceanSdk\Advertiser\Data\AdvertiserDeliveryPkgSubmitPostParamDeliveryPkgUnnecessaryCombinesData> $unnecessary_combines 选填资质模块，数组长度0~30
     */
    public array $unnecessary_combines;
    
}