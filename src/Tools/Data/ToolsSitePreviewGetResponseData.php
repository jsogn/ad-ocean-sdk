<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ToolsSitePreviewGetResponseData extends Data
{

    /**
     * @var string $url 建站站点的预览地址，有效期：10分钟
     */
    public string $url;
    
}