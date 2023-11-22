<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class EventManagerEventConfigsGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var int $asset_id 资产ID
     */
    public int $asset_id;
    
    /**
     * @var string $sort_type 创建时间排序方式，允许值：DESC降序、ASC升序。默认：ASC
     */
    public string $sort_type;
    
}