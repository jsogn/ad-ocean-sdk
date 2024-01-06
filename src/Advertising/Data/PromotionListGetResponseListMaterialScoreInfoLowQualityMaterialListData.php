<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 低质素材信息
class PromotionListGetResponseListMaterialScoreInfoLowQualityMaterialListData extends Data
{

    /**
     * @var array<string> $low_quality_video_ids 低质视频素材
     */
    public array $low_quality_video_ids;
    
    /**
     * @var array<string> $low_quality_image_ids 低质图片素材
     */
    public array $low_quality_image_ids;
    
}