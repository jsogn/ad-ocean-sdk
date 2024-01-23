<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 查询失败的锚点及查询失败原因
class NativeAnchorDetailGetResponseErrorListData extends Data
{

    /**
     * @var string $anchor_id 锚点id
     */
    public string $anchor_id;
    
    /**
     * @var string $message 查询失败的原因
     */
    public string $message;
    
}