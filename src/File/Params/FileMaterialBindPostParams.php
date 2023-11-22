<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Params;

use AdOceanSdk\RequestParams;

class FileMaterialBindPostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 素材归属广告主
     */
    public int $advertiser_id;
    
    /**
     * @var array<int> $target_advertiser_ids 待推送的广告主，数量限制：<=50
     */
    public array $target_advertiser_ids;
    
    /**
     * @var array<string> $video_ids 视频ID，数量限制：<=50 注意：跟image_ids、carousel_ids必须三选一、组织共享视频不可推送
     */
    public array $video_ids;
    
    /**
     * @var array<string> $image_ids 图片ID，数量限制：<=50 注意：跟video_ids、carousel_ids必须三选一
     */
    public array $image_ids;
    
    /**
     * @var array<int> $carousel_ids 图集ID，数量限制：<=50 注意：跟image_ids、video_ids必须三选一
     */
    public array $carousel_ids;
    
}