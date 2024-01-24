<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 组图组件描述
class SiteTemplateCreatePostResponseBricksPictureGroupData extends Data
{

    /**
     * @var array<\AdOceanSdk\Tools\Data\SiteTemplateCreatePostResponseBricksPictureGroupContentData> $content 组图内容列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\SiteTemplateCreatePostResponseBricksPictureGroupContentData::class)]
    public array $content;
    
}