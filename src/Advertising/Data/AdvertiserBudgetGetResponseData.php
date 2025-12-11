<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class AdvertiserBudgetGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Advertising\Data\AdvertiserBudgetGetResponseListData> $list 
     */
    public array $list;
    
}