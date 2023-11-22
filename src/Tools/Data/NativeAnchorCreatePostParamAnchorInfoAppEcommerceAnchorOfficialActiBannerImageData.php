<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 官方互动banner图，推荐尺寸1032*360px
class NativeAnchorCreatePostParamAnchorInfoAppEcommerceAnchorOfficialActiBannerImageData extends Data
{

    /**
     * @var string $uri 图片image_id
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