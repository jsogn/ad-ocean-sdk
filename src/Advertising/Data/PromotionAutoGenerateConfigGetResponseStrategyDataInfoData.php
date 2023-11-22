<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 策略基本信息
class PromotionAutoGenerateConfigGetResponseStrategyDataInfoData extends Data
{

    /**
     * @var string $cover_url 样例视频封面url
     */
    public string $cover_url;
    
    /**
     * @var string $video_url 样例视频url
     */
    public string $video_url;
    
    /**
     * @var string $vid 样例视频vid
     */
    public string $vid;
    
}