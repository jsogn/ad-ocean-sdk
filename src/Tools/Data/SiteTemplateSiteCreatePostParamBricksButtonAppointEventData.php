<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// appointEvent事件行为描述，当event_type为APPOINT_EVENT时，必填
class SiteTemplateSiteCreatePostParamBricksButtonAppointEventData extends Data
{

    /**
     * @var string $game_id 游戏ID
     */
    public string $game_id;
    
    /**
     * @var \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksButtonAppointEventLinkData $link 链接信息
     */
    public \AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksButtonAppointEventLinkData $link;
    
}