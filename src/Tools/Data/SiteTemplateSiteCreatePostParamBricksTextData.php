<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 文本组件描述，当type为SIMPLE_TEXT或RICH_TEXT时，必填
class SiteTemplateSiteCreatePostParamBricksTextData extends Data
{

    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksTextContentData $content 文本内容，长度至少为1
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksTextContentData $content;
    
}