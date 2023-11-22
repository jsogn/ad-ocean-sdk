<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 自定义创意类型的素材审核建议
class CreativeRejectReasonGetResponseListMaterialRejectData extends Data
{

    /**
     * @var string $title 标题
     */
    public string $title;
    
    /**
     * @var array<string> $image_id 图片ID
     */
    public array $image_id;
    
    /**
     * @var string $video_id 视频ID
     */
    public string $video_id;
    
    /**
     * @var string $reject_reason 审核建议
     */
    public string $reject_reason;
    
}