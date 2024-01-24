<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 组图内容列表
class SiteTemplateSiteCreatePostParamBricksPictureGroupContentData extends Data
{

    /**
     * @var string $url 用户自行上传的图片url，当content不为空时，必填
     */
    public string $url;
    
    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksPictureGroupContentLinkDtoData $link_dto 图片跳转链接信息
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksPictureGroupContentLinkDtoData $link_dto;
    
    /**
     * @var string $tag 标签，用户自定义标注
     */
    public string $tag;
    
}