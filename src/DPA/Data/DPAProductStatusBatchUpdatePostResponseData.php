<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class DPAProductStatusBatchUpdatePostResponseData extends Data
{

    /**
     * @var array<int> $success_list 修改状态成功的商品列表
     */
    public array $success_list;
    
    /**
     * @var array<\AdOceanSdk\DPA\Data\DPAProductStatusBatchUpdatePostResponseErrorListData> $error_list 修改状态失败的商品列表
     */
    public array $error_list;
    
}