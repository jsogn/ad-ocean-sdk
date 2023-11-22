<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 第三方链接设置
class NativeAnchorUpdatePostParamAnchorInfoAppEcommerceAnchorThirdSiteInfoData extends Data
{

    /**
     * @var string $ios_external_url iOS端落地页链接，内部需要包含应用下载链接
     */
    public string $ios_external_url;
    
    /**
     * @var string $android_external_url 安卓端落地页链接，内部需要包含应用下载链接
     */
    public string $android_external_url;
    
    /**
     * @var string $external_url 第三方落地页
     */
    public string $external_url;
    
}