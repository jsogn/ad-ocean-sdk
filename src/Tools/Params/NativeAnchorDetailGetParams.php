<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class NativeAnchorDetailGetParams extends RequestParams
{

    /**
     * @var array<string> $anchor_ids 锚点id列表，list长度为20，注意只允许传入同一类（anchor_type)查询详情，否则报错
     */
    public array $anchor_ids;
    
    /**
     * @var int $advertiser_id 广告主账户ID
     */
    public int $advertiser_id;
    
    /**
     * @var string $anchor_type 锚点类型，同时只能查询一种锚点类型，可选值:
     */
    public string $anchor_type;
    
}