<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 扩展商品图，商品图片的补充
class DPADetailGetGetResponseListImageUrlsData extends Data
{

    /**
     * @var string $url 图片链接url
     */
    public string $url;
    
}