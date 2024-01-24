<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// ios链接信息
class SiteTemplateCreatePostResponseBricksButtonDownloadEventIosLinkData extends Data
{

    /**
     * @var string $link_type 链接类型，当ios_link不为空时，有返回值，枚举值：QUICK_APP快应用地址、SCHEMEscheme地址、URL链接地址
     */
    public string $link_type;
    
    /**
     * @var string $url 下载地址，当link_type等于URL时，有返回值
     */
    public string $url;
    
    /**
     * @var string $description 应用描述，为了展示效果，推荐12个中文字符长度
     */
    public string $description;
    
}