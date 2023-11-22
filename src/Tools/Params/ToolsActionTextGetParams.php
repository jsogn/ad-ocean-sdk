<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsActionTextGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var string $landing_type 推广类型允许值：APP，SHOP，LINK
     */
    public string $landing_type;
    
    /**
     * @var string $advanced_creative_type 附加创意类型，详见枚举
     */
    public string $advanced_creative_type;
    
    /**
     * @var int $industry 广告主行业id，可以从获取行业接口进行获取
     */
    public int $industry;
    
}