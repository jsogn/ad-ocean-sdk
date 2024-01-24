<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 文本组件描述
class SiteTemplateCreatePostResponseBricksTextData extends Data
{

    /**
     * @var string $content 文本内容，长度至少为1
     */
    public string $content;
    
    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateCreatePostResponseBricksTextLinkDtoData $link_dto 跳转链接信息
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateCreatePostResponseBricksTextLinkDtoData $link_dto;
    
}