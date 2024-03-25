<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 商品视频列表
class DPAClueProductDetailGetResponseProductsVideosData extends Data
{

    /**
     * @var string $url 视频ID
     */
    public string $url;
    
    /**
     * @var string $template_id 视频模板ID
     */
    public string $template_id;
    
}