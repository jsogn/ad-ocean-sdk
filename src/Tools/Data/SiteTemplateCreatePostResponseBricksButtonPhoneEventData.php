<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// phoneEvent事件行为描述
class SiteTemplateCreatePostResponseBricksButtonPhoneEventData extends Data
{

    /**
     * @var int $instance_id 智能电话ID，当phone_event不为空时，有返回值。用户可以通过【获取智能电话列表】接口或【青鸟线索通平台】获取智能电话ID
     */
    public int $instance_id;
    
}