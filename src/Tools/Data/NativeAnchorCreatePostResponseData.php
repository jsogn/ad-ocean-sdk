<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class NativeAnchorCreatePostResponseData extends Data
{

    /**
     * @var string $anchor_id 原生锚点id
     */
    public string $anchor_id;
    
    /**
     * @var string $anchor_type 可选值:
     */
    public string $anchor_type;
    
}