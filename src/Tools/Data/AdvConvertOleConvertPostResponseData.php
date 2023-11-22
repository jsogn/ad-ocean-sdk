<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class AdvConvertOleConvertPostResponseData extends Data
{

    /**
     * @var array $order_infos 订单明细
     */
    public array $order_infos;
    
}