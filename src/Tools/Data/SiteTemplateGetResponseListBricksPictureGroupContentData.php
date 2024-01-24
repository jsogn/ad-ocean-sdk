<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 组图内容列表
class SiteTemplateGetResponseListBricksPictureGroupContentData extends Data
{

    /**
     * @var string $url 用户自行上传的图片url，当content不为空时，有值
     */
    public string $url;
    
    /**
     * @var object $link_dto 跳转链接信息
     */
    public object $link_dto;
    
}