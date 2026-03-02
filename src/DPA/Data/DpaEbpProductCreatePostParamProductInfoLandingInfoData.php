<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 
class DpaEbpProductCreatePostParamProductInfoLandingInfoData extends Data
{

    /**
     * @var string $target_url 
     */
    public string $target_url;

    /**
     * @var string $target_url_mobile 
     */
    public string $target_url_mobile;

    /**
     * @var string $target_url_android_app 
     */
    public string $target_url_android_app;

    /**
     * @var string $target_url_ios_app 
     */
    public string $target_url_ios_app;

    /**
     * @var string $target_url_universal_link 
     */
    public string $target_url_universal_link;

}