<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 跳转链接信息
class SiteTemplateGetResponseListBricksTextLinkDtoData extends Data
{

    /**
     * @var string $link_type 链接类型，当link_dto不为空时，有值 枚举值：QUICK_APP快应用地址、SCHEMEscheme地址、URL链接地址
     */
    public string $link_type;
    
    /**
     * @var string $url 链接地址，当link_type等于URL时，有值
     */
    public string $url;
    
    /**
     * @var string $scheme scheme地址，当link_type等于SCHEME时，有值
     */
    public string $scheme;
    
    /**
     * @var string $quick_app 快应用地址，当link_type等于QUICK_APP时，有值
     */
    public string $quick_app;
    
}