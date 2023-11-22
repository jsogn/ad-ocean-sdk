<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 转赠成功列表，整体失败不返回该列表
class ToolsSiteHandselPostResponseSuccessListData extends Data
{

    /**
     * @var string $origin_site_id 返回转赠成功的原site_ids
     */
    public string $origin_site_id;
    
    /**
     * @var \AdOceanSdk\Tools\Data\ToolsSiteHandselPostResponseSuccessListTargetAdvertiserIdData $target_advertiser_id 返回转赠成功的目标广告主id
     */
    public \AdOceanSdk\Tools\Data\ToolsSiteHandselPostResponseSuccessListTargetAdvertiserIdData $target_advertiser_id;
    
}