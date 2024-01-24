<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 表单组件描述，当type为FORM时，必填
class SiteTemplateSiteCreatePostParamBricksFormData extends Data
{

    /**
     * @var int $instance_id 活动ID，当form不为空时，必填。用户可以通过【获取表单列表】接口或【青鸟线索通平台】获取卡券ID
     */
    public int $instance_id;
    
}