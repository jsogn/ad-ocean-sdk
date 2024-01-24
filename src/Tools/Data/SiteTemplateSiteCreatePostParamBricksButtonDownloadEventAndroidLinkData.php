<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// android链接信息，与ios链接信息二选一
class SiteTemplateSiteCreatePostParamBricksButtonDownloadEventAndroidLinkData extends Data
{

    /**
     * @var string $link_type 链接类型，当android_link不为空时，允许值：QUICK_APP快应用地址、URL链接地址
     */
    public string $link_type;
    
    /**
     * @var string $url 链接地址，当link_type为URL时，必填，
     */
    public string $url;
    
    /**
     * @var string $quick_app 快应用地址，当link_type为QUICK_APP时，必填
     */
    public string $quick_app;
    
    /**
     * @var string $description 应用描述，为了展示效果，推荐12个中文字符长度
     */
    public string $description;
    
}