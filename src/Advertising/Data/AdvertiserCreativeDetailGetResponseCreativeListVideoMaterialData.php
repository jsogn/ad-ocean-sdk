<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 视频素材信息
class AdvertiserCreativeDetailGetResponseCreativeListVideoMaterialData extends Data
{

    /**
     * @var \AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeListVideoMaterialImageInfoData $image_info 视频封面图片
     */
    public \AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeListVideoMaterialImageInfoData $image_info;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeListVideoMaterialVideoInfoData $video_info 视频素材信息
     */
    public \AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeListVideoMaterialVideoInfoData $video_info;
    
    /**
     * @var int $aweme_item_id 抖音短视频ID
     */
    public int $aweme_item_id;
    
    /**
     * @var string $dpa_video_template_type 商品库视频生成类型 >
     */
    public string $dpa_video_template_type;
    
    /**
     * @var array<string> $dpa_video_task_ids 自定义商品库视频模板ID
     */
    public array $dpa_video_task_ids;
    
}