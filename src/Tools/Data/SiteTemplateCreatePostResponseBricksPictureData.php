<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 图片组件描述
class SiteTemplateCreatePostResponseBricksPictureData extends Data
{

    /**
     * @var string $url 图片url，当picture不为空时，有返回值
     */
    public string $url;
    
    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateCreatePostResponseBricksPictureLinkDtoData $link_dto 图片跳转链接信息
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateCreatePostResponseBricksPictureLinkDtoData $link_dto;
    
    /**
     * @var string $tag 标签，用户自定义标注
     */
    public string $tag;
    
}