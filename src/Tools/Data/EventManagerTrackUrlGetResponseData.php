<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class EventManagerTrackUrlGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Tools\Data\EventManagerTrackUrlGetResponseTrackUrlGroupsData> $track_url_groups 监测链接组信息
     */
    public array $track_url_groups;
    
    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;
    
}