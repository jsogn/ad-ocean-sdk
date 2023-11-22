<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class NativeAnchorUpdatePostResponseData extends Data
{

    /**
     * @var string $anchor_id 原生锚点ID
     */
    public string $anchor_id;
    
}