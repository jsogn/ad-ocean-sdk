<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// phoneEvent事件行为描述，当event_type为PHONE_EVENT时，必填
class SiteTemplateSiteCreatePostParamBricksButtonPhoneEventData extends Data
{

    /**
     * @var int $instance_id 智能电话组件ID，当phone_event不为空时，必填，用户可以通过【创建智能电话】接口或【青鸟线索通平台】创建智能电话组件
     */
    public int $instance_id;
    
}