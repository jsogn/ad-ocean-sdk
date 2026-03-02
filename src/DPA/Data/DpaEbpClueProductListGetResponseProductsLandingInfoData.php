<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 落地页信息
class DpaEbpClueProductListGetResponseProductsLandingInfoData extends Data
{

    /**
     * @var string $target_url 默认落地页
     */
    public string $target_url;

    /**
     * @var string $target_url_mobile H5落地页
     */
    public string $target_url_mobile;

    /**
     * @var string $target_url_android_app 安卓落地页
     */
    public string $target_url_android_app;

    /**
     * @var string $target_url_ios_app IOS落地页
     */
    public string $target_url_ios_app;

    /**
     * @var string $universal_link 落地页universal link
     */
    public string $universal_link;

}