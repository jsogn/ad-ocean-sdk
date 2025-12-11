<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class DPAProductAvailablesGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\DPA\Data\DPAProductAvailablesGetResponseListData> $list 商品库信息列表
     */
    public array $list;
    
}