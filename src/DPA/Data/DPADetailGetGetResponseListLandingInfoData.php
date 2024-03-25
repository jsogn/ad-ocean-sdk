<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 落地页信息
class DPADetailGetGetResponseListLandingInfoData extends Data
{

    /**
     * @var string $target_url PC端商品落地页URL
     */
    public string $target_url;
    
    /**
     * @var string $target_url_mobile H5页面商品落地页URL
     */
    public string $target_url_mobile;
    
    /**
     * @var string $target_url_android_app Android应用直达落地页
     */
    public string $target_url_android_app;
    
    /**
     * @var string $target_url_ios_app IOS应用商品直达调起链接
     */
    public string $target_url_ios_app;
    
    /**
     * @var string $target_url_universal_link IOS应用商品调起ulink链接
     */
    public string $target_url_universal_link;
    
}