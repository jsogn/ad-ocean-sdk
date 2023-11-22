<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 素材信息列表，标题，图片，视频均是不同素材，注意部分老数据可能此结构为空
class AdvertiserCreativeGetResponseListMetarialsData extends Data
{

    /**
     * @var string $title 创意素材标题
     */
    public string $title;
    
    /**
     * @var string $image_id 视频素材封面
     */
    public string $image_id;
    
    /**
     * @var string $video_id 视频ID
     */
    public string $video_id;
    
    /**
     * @var string $aweme_item_id 抖音视频ID
     */
    public string $aweme_item_id;
    
}