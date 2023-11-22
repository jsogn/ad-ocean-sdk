<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Params;

use AdOceanSdk\RequestParams;

class FileImageDeletePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id  广告主ID
     */
    public int $advertiser_id ;
    
    /**
     * @var array<string> $image_ids 待删除的图片ID列表，长度范围：1 ~ 100
     */
    public array $image_ids;
    
}