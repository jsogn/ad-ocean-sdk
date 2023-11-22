<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Params;

use AdOceanSdk\RequestParams;

class FileVideoUpdatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var array<\AdOceanSdk\File\Data\FileVideoUpdatePostParamVideosData> $videos 限制最多 100 个
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\File\Data\FileVideoUpdatePostParamVideosData::class)]
    public array $videos;
    
}