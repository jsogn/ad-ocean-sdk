<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 品牌落地页信息
class DpaEbpClueProductListGetResponseProductsBrandInfoTargetUrlData extends Data
{

    /**
     * @var string $target_url 品牌落地页
     */
    public string $target_url;

    /**
     * @var string $target_url_mobile 品牌H5落地页
     */
    public string $target_url_mobile;

    /**
     * @var string $target_url_android_app 品牌安卓落地页
     */
    public string $target_url_android_app;

    /**
     * @var string $target_url_ios_app 品牌IOS落地页
     */
    public string $target_url_ios_app;

    /**
     * @var string $universal_link 品牌落地页universal link
     */
    public string $universal_link;

}