<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Params;

use AdOceanSdk\RequestParams;

class FileVideoDeletePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 素材归属的广告主
     */
    public int $advertiser_id;
    
    /**
     * @var array<string> $video_ids 待删除的video_id列表，长度范围：1 ~ 100
     */
    public array $video_ids;
    
    /**
     * @var array<int> $material_ids 待删除的material_id列表，长度范围：1 ~ 100
     */
    public array $material_ids;
    
}