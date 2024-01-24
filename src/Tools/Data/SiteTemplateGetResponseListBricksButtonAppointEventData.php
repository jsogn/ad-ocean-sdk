<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// appointEvent事件行为描述
class SiteTemplateGetResponseListBricksButtonAppointEventData extends Data
{

    /**
     * @var string $game_id 游戏站ID
     */
    public string $game_id;
    
    /**
     * @var object $link 链接信息
     */
    public object $link;
    
}