<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 顶部头图，推荐尺寸为2：1的横图
class NativeAnchorUpdatePostParamAnchorInfoGameAnchorHeadImageListData extends Data
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