<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 游戏icon，当前锚点类型且game_type为MICRO_GAME微信小游戏必填，比例为1：1，最多一个
class NativeAnchorUpdatePostParamAnchorInfoGameAnchorIconImagesData extends Data
{

    /**
     * @var string $uri 图片image_id
     */
    public string $uri;
    
    /**
     * @var int $width 宽度
     */
    public int $width;
    
    /**
     * @var int $height 高度
     */
    public int $height;
    
}