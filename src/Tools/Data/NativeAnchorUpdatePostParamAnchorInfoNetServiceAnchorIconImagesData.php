<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 应用icon图，网服锚点类型且net_service_type为MICRO_APP 微信小程序、QUICK_APP快应用时必填
class NativeAnchorUpdatePostParamAnchorInfoNetServiceAnchorIconImagesData extends Data
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