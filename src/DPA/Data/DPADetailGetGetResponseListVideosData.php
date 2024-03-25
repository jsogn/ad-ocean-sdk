<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 视频内容，小说库特有字段
class DPADetailGetGetResponseListVideosData extends Data
{

    /**
     * @var string $url 视频链接url
     */
    public string $url;
    
    /**
     * @var string $template_id 模版id
     */
    public string $template_id;
    
}