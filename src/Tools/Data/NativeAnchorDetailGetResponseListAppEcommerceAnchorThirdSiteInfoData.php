<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 第三方链接设置
class NativeAnchorDetailGetResponseListAppEcommerceAnchorThirdSiteInfoData extends Data
{

    /**
     * @var string $android_download_url 安卓下载链接，请输入APP Store下载链接
     */
    public string $android_download_url;
    
    /**
     * @var string $ios_download_url ios下载链接，请输入字节应用管理中心下载链接
     */
    public string $ios_download_url;
    
    /**
     * @var string $external_url 落地页链接（选择跳转配置为第三方链接时必填）
     */
    public string $external_url;
    
}