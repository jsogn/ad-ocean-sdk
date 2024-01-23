<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 应用icon图，网服锚点类型且net_service_type为MICRO_APP 必填
class NativeAnchorDetailGetResponseListNetServiceAnchorIconImagesData extends Data
{

    /**
     * @var string $uri image_id
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