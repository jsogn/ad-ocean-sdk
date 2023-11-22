<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class NativeAnchorDeletePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var string $anchor_id 原生锚点ID
     */
    public string $anchor_id;
    
    /**
     * @var string $anchor_type 锚点类型，可选值:
     */
    public string $anchor_type;
    
}