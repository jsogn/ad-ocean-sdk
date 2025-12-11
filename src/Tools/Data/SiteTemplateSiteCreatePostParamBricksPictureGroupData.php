<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 组图组件描述，当type为PICTURE_GROUP时，必填
class SiteTemplateSiteCreatePostParamBricksPictureGroupData extends Data
{

    /**
     * @var array<\AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksPictureGroupContentData> $content 组图内容列表
     */
    public array $content;
    
}