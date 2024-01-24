<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 快应用地址，当link_type等于QUICK_APP时，有值
class SiteTemplateGetResponseListBricksLinkDtoQuickAppData extends Data
{

    /**
     * @var string $tag 标签，用户自定义标注
     */
    public string $tag;
    
}