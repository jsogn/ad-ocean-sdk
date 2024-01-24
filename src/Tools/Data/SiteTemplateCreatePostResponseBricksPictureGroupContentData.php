<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 组图内容列表
class SiteTemplateCreatePostResponseBricksPictureGroupContentData extends Data
{

    /**
     * @var string $url 图片url，当content不为空时，有返回值
     */
    public string $url;
    
    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateCreatePostResponseBricksPictureGroupContentLinkDtoData $link_dto 跳转链接信息
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateCreatePostResponseBricksPictureGroupContentLinkDtoData $link_dto;
    
}