<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 广告版位
class ProjectListGetResponseListDeliveryRangeData extends Data
{

    /**
     * @var string $inventory_catalog 广告位大类，枚举值：MANUAL首选媒体，UNIVERSAL_SMART通投智选
     */
    public string $inventory_catalog;
    
    /**
     * @var array<string> $inventory_type 广告投放位置（首选媒体），详见【附录-首选投放位置】
     */
    public array $inventory_type;
    
    /**
     * @var string $union_video_type 投放形式（穿山甲视频创意类型），枚举值：ORIGINAL_VIDEO原生视频、REWARDED_VIDEO激励视频、SPLASH_VIDEO开屏视频
     */
    public string $union_video_type;
    
}