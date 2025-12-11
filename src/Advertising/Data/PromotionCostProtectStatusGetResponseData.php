<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class PromotionCostProtectStatusGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionCostProtectStatusGetResponseCompensateStatusInfoListData> $compensate_status_info_list 
     */
    public array $compensate_status_info_list;
    
}