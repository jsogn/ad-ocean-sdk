<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 过滤字段
class AudiencePackageGetParamFilteringData extends Data
{

    /**
     * @var string $landing_type 定向包类型【附录-定向包推广类型】
     */
    public string $landing_type;
    
    /**
     * @var string $delivery_range 广告投放范围【附录-广告投放范围】
     */
    public string $delivery_range;
    
    /**
     * @var string $ad_type 广告类型
     */
    public string $ad_type;
    
    /**
     * @var string $marketing_goal 营销场景，允许值：VIDEO_AND_IMAGE 短视频/图片（默认值）， LIVE 直播
     */
    public string $marketing_goal;
    
}