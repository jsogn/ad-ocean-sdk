<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 链接信息
class SiteTemplateSiteCreatePostParamBricksButtonAppointEventLinkData extends Data
{

    /**
     * @var string $link_type 链接类型，当跳转链接信息不为空时，允许值：QUICK_APP快应用地址、SCHEMEscheme地址、URL链接地址
     */
    public string $link_type;
    
    /**
     * @var string $url 链接地址，当link_type为URL时，必填
     */
    public string $url;
    
    /**
     * @var string $scheme scheme地址，当link_type为SCHEME时，必填
     */
    public string $scheme;
    
    /**
     * @var string $quick_app 快应用地址，当link_type为QUICK_APP时，必填
     */
    public string $quick_app;
    
}