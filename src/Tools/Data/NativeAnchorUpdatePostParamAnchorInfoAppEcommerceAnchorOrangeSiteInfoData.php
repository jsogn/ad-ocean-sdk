<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 橙子建站设置
class NativeAnchorUpdatePostParamAnchorInfoAppEcommerceAnchorOrangeSiteInfoData extends Data
{

    /**
     * @var string $ios_external_url iOS落地页链接，iOS用户未下载应用进入页面
     */
    public string $ios_external_url;
    
    /**
     * @var string $android_external_url 安卓端落地页链接，安卓用户未下载应用进入页面
     */
    public string $android_external_url;
    
}