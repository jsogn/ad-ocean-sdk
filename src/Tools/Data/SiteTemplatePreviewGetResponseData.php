<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class SiteTemplatePreviewGetResponseData extends Data
{

    /**
     * @var string $preview_url 预览URL，模板的预览地址，有效期：20分钟
     */
    public string $preview_url;
    
}