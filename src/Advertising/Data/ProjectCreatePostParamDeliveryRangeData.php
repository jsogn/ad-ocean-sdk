<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 广告版位
class ProjectCreatePostParamDeliveryRangeData extends Data
{

    /**
     * @var string $inventory_catalog 广告位大类，允许值：MANUAL首选媒体，UNIVERSAL_SMART通投智选
     */
    public string $inventory_catalog;
    
    /**
     * @var array<string> $inventory_type 广告投放位置（首选媒体），inventory_catalog =MANUAL有效且必填，允许值：INVENTORY_FEED今日头条INVENTORY_VIDEO_FEED西瓜视频INVENTORY_AWEME_FEED抖音短视频INVENTORY_TOMATO_NOVEL番茄小说INVENTORY_UNION_SLOT穿山甲UNION_BOUTIQUE_GAMEohayoo精品游戏
     */
    public array $inventory_type;
    
    /**
     * @var string $union_video_type 投放形式（穿山甲视频创意类型）
     */
    public string $union_video_type;
    
}