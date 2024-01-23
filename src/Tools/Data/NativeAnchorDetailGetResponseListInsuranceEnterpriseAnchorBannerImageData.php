<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 详情介绍banner,大小不超过10M的图片，尺寸1032*360px
class NativeAnchorDetailGetResponseListInsuranceEnterpriseAnchorBannerImageData extends Data
{

    /**
     * @var string $uri 图片uri
     */
    public string $uri;
    
    /**
     * @var int $width 图片宽度
     */
    public int $width;
    
    /**
     * @var int $height 图片高度
     */
    public int $height;
    
}