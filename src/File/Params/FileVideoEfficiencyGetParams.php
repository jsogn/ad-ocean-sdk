<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Params;

use AdOceanSdk\RequestParams;

class FileVideoEfficiencyGetParams extends RequestParams
{

    /**
     * @var string $advertiser_id 广告主id
     */
    public string $advertiser_id;
    
    /**
     * @var array<string> $material_ids 素材列表，单次最多可查询100个
     */
    public array $material_ids;
    
}