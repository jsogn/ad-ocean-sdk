<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 品牌信息
class DpaEbpClueProductListGetResponseProductsBrandInfoData extends Data
{

    /**
     * @var string $brand_id 品牌id
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
     * @var \AdOceanSdk\DPA\Data\DpaEbpClueProductListGetResponseProductsBrandInfoTargetUrlData $target_url 品牌落地页信息
     */
    public \AdOceanSdk\DPA\Data\DpaEbpClueProductListGetResponseProductsBrandInfoTargetUrlData $target_url;

    /**
     * @var string $brand_logo 品牌logo
     */
    public string $brand_logo;

    /**
     * @var string $brand_owner 所属集团名称
     */
    public string $brand_owner;

}