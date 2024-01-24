<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 发券组件描述
class SiteTemplateCreatePostResponseBricksCouponData extends Data
{

    /**
     * @var int $activity_id 活动ID，当coupon不为空时，有返回值。用户可以通过【获取卡券列表】接口或【青鸟线索通平台】获取活动ID
     */
    public int $activity_id;
    
}