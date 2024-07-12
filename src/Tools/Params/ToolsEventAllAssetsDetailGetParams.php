<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsEventAllAssetsDetailGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主 id
     */
    public int $advertiser_id;
    
    /**
     * @var array<int> $asset_ids 资产id列表，list长度最长50
     */
    public array $asset_ids;
    
}