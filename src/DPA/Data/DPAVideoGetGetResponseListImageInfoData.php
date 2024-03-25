<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 视频模板封面图信息
class DPAVideoGetGetResponseListImageInfoData extends Data
{

    /**
     * @var int $height 图片高度
     */
    public int $height;
    
    /**
     * @var string $image_id 图片id
     */
    public string $image_id;
    
    /**
     * @var int $width 图片宽度
     */
    public int $width;
    
}