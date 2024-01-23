<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 服务主图
class NativeAnchorDetailGetResponseListInsuranceEnterpriseAnchorProductImageData extends Data
{

    /**
     * @var string $uri 图片uri，大小不超过10M，服务主图以小图及大图形式分别展示
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