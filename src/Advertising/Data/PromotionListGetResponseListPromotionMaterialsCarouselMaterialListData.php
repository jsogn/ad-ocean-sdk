<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 创意图文素材
class PromotionListGetResponseListPromotionMaterialsCarouselMaterialListData extends Data
{

    /**
     * @var array<string> $image_id 图片ID列表
     */
    public array $image_id;
    
    /**
     * @var string $audio_id 音频ID
     */
    public string $audio_id;
    
    /**
     * @var string $material_status 素材审核状态
     */
    public string $material_status;
    
    /**
     * @var int $carousel_type 图文素材类型
     */
    public int $carousel_type;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionListGetResponseListPromotionMaterialsCarouselMaterialListImageSubjectData> $image_subject 图片主题
     */
    public array $image_subject;
    
}