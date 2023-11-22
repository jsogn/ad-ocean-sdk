<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ToolsMicroAppCreatePostResponseData extends Data
{

    /**
     * @var int $instance_id 字节小程序资产id
     */
    public int $instance_id;
    
}