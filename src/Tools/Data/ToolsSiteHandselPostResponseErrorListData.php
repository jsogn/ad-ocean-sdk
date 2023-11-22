<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 转赠失败列表，整体成功不返回该列表
class ToolsSiteHandselPostResponseErrorListData extends Data
{

    /**
     * @var string $origin_site_id 返回转赠失败的原site_ids
     */
    public string $origin_site_id;
    
    /**
     * @var \AdOceanSdk\Tools\Data\ToolsSiteHandselPostResponseErrorListTargetAdvertiserIdData $target_advertiser_id 返回转赠失败的目标广告主id
     */
    public \AdOceanSdk\Tools\Data\ToolsSiteHandselPostResponseErrorListTargetAdvertiserIdData $target_advertiser_id;
    
}