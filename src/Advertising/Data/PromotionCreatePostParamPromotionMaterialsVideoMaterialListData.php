<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 视频素材信息，上限10个，video_material_list 与 image_material_list 最少传入一种
class PromotionCreatePostParamPromotionMaterialsVideoMaterialListData extends Data
{

    /**
     * @var string $image_mode 素材类型，允许值：CREATIVE_IMAGE_MODE_VIDEO横版视频、CREATIVE_IMAGE_MODE_VIDEO_VERTICAL竖版视频
     */
    public string $image_mode;
    
    /**
     * @var string $video_id 视频ID，image_mode为视频素材时填写可通过【获取视频素材】接口获得
     */
    public string $video_id;
    
    /**
     * @var string $video_cover_id 视频封面图片ID，image_mode为视频素材时填写 可通过【获取图片素材】接口获得
     */
    public string $video_cover_id;
    
    /**
     * @var int $item_id 抖音短视频ID，通过【获取抖音主页视频】或【获取抖音授权关系】获取主页视频或合作授权视频注：当aweme_id传入时有效
     */
    public int $item_id;
    
}