<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 推送失败列表
class FileMaterialBindPostResponseFailListData extends Data
{

    /**
     * @var string $video_id 推送失败的视频id
     */
    public string $video_id;
    
    /**
     * @var int $carousel_id 推送失败的图集id
     */
    public int $carousel_id;
    
    /**
     * @var string $image_id 推送失败的图片id
     */
    public string $image_id;
    
    /**
     * @var int $target_advertiser_id 目标推送广告主id
     */
    public int $target_advertiser_id;
    
    /**
     * @var string $fail_reason 推送失败原因
     */
    public string $fail_reason;
    
}