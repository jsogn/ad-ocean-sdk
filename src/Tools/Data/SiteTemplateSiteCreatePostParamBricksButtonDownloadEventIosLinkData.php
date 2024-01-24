<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// ios链接信息，与android链接信息二选一
class SiteTemplateSiteCreatePostParamBricksButtonDownloadEventIosLinkData extends Data
{

    /**
     * @var string $link_type 链接类型，当ios_link不为空时，允许值：URL链接地址
     */
    public string $link_type;
    
    /**
     * @var string $url 链接地址，当link_type为URL时，必填
     */
    public string $url;
    
    /**
     * @var string $description 应用描述，为了展示效果，推荐12个中文字符长度
     */
    public string $description;
    
}