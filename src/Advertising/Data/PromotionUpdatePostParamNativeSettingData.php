<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 原生广告设置
class PromotionUpdatePostParamNativeSettingData extends Data
{

    /**
     * @var string $is_feed_and_fav_see 主页作品列表隐藏广告内容允选值：OFF（不隐藏），ON（隐藏）默认值：ON
     */
    public string $is_feed_and_fav_see;
    
    /**
     * @var string $anchor_related_type 原生锚点启用开关，允许值:不启用OFF（默认值），自动生成AUTO，手动选择SELECT
     */
    public string $anchor_related_type;
    
}