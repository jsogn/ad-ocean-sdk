<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Params;

use AdOceanSdk\RequestParams;

class DPAProductStatusBatchUpdatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var int $platform_id 商品库ID
     */
    public int $platform_id;
    
    /**
     * @var array<int> $product_ids 商品ID列表
     */
    public array $product_ids;
    
    /**
     * @var string $opt_status 操作ENABLE开启投放DISABLE停止投放
     */
    public string $opt_status;
    
}