<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 修改状态失败的商品列表
class DPAProductStatusBatchUpdatePostResponseErrorListData extends Data
{

    /**
     * @var int $product_id 修改失败的商品id
     */
    public int $product_id;
    
    /**
     * @var string $error_msg 失败原因
     */
    public string $error_msg;
    
}