<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 图片组件描述，当type为PICTURE时，必填
class SiteTemplateSiteCreatePostParamBricksPictureData extends Data
{

    /**
     * @var string $url 用户自行上传的图片url，当picture不为空时，必填
     */
    public string $url;
    
    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksPictureLinkDtoData $link_dto 图片跳转链接信息
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksPictureLinkDtoData $link_dto;
    
    /**
     * @var string $tag 标签，用户自定义标注
     */
    public string $tag;
    
}