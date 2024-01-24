<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 表单组件描述
class SiteTemplateCreatePostResponseBricksFormData extends Data
{

    /**
     * @var int $instance_id 表单ID，当form不为空时，有返回值。用户可以通过【获取表单列表】接口或【青鸟线索通平台】获取表单ID
     */
    public int $instance_id;
    
}