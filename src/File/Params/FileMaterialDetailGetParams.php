<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Params;

use AdOceanSdk\RequestParams;

class FileMaterialDetailGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主 id
     */
    public int $advertiser_id;
    
    /**
     * @var array<int> $material_ids 素材 id 列表，最多50
     */
    public array $material_ids;
    
}