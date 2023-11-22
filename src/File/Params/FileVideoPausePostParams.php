<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Params;

use AdOceanSdk\RequestParams;

class FileVideoPausePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var array<int> $material_ids 待删除素材id列表，长度范围：1～20
     */
    public array $material_ids;
    
}