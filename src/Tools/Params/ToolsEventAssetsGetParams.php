<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsEventAssetsGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主 id
     */
    public int $advertiser_id;
    
    /**
     * @var string $asset_type 资产类型，允许值:THIRD_EXTERNAL:三方落地页,APP:应用,QUICK_APP:快应用,MINI_PROGRAME:小程序
     */
    public string $asset_type;
    
    /**
     * @var \AdOceanSdk\Tools\Data\ToolsEventAssetsGetParamFilteringData $filtering 过滤条件
     */
    public \AdOceanSdk\Tools\Data\ToolsEventAssetsGetParamFilteringData $filtering;
    
    /**
     * @var string $sort_type 排序方式，允许值：ASC：升序DESC：降序默认值ASC
     */
    public string $sort_type;
    
    /**
     * @var int $page 页码，默认值1
     */
    public int $page;
    
    /**
     * @var int $page_size 页面大小，默认值10，最大30
     */
    public int $page_size;
    
}