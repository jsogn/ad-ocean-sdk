<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class NativeAnchorUpdatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var \AdOceanSdk\Tools\Data\NativeAnchorUpdatePostParamAnchorInfoData $anchor_info 锚点信息
     */
    public \AdOceanSdk\Tools\Data\NativeAnchorUpdatePostParamAnchorInfoData $anchor_info;
    
}