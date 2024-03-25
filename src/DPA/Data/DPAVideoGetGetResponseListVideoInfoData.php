<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 商品库视频模板视频信息
class DPAVideoGetGetResponseListVideoInfoData extends Data
{

    /**
     * @var int $height 视频高度
     */
    public int $height;
    
    /**
     * @var int $width 视频宽度
     */
    public int $width;
    
    /**
     * @var string $image_mode 视频类型，详见【附录-枚举值-素材类型】可选值:CREATIVE_IMAGE_MODE_VIDEO：横版视频,CREATIVE_IMAGE_MODE_VIDEO_VERTICAL：竖版视频
     */
    public string $image_mode;
    
    /**
     * @var string $status 视频状态，可选值:AVAILABLE：可用,UNAVAILABLE：不可用
     */
    public string $status;
    
    /**
     * @var string $video_id 视频id
     */
    public string $video_id;
    
}