<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 视频素材信息
class CreativeDetailGetResponseCreativeVideoMaterialsData extends Data
{

    /**
     * @var string $image_mode 素材类型
     */
    public string $image_mode;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeVideoMaterialsImageInfoData $image_info 视频封面图片
     */
    public \AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeVideoMaterialsImageInfoData $image_info;
    
    /**
     * @var object $video_info 视频素材信息
     */
    public object $video_info;
    
    /**
     * @var string $video_id 视频ID
     */
    public string $video_id;
    
    /**
     * @var int $aweme_item_id 抖音短视频ID
     */
    public int $aweme_item_id;
    
    /**
     * @var string $dpa_video_template_type 商品库视频生成类型
     */
    public string $dpa_video_template_type;
    
    /**
     * @var array<string> $dpa_video_task_ids 自定义商品库视频模板ID
     */
    public array $dpa_video_task_ids;
    
}