<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsLandingGroupSiteOptStatusUpdatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var int $group_id 落地页组 ID
     */
    public int $group_id;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsLandingGroupSiteOptStatusUpdatePostParamData> $data 操作站点
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\ToolsLandingGroupSiteOptStatusUpdatePostParamData::class)]
    public array $data;
    
}