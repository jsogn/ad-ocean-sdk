<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 商品图片，比例1:1，至少1张
class NativeAnchorUpdatePostParamAnchorInfoShoppingCartAnchorProductImagesData extends Data
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