<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// APP图标，推荐比例1：1
class NativeAnchorUpdatePostParamAnchorInfoAppEcommerceAnchorAppIconData extends Data
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