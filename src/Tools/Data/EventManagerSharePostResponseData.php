<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class EventManagerSharePostResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Tools\Data\EventManagerSharePostResponseErrorListData> $error_list 共享失败的账户ID及原因列表
     */
    public array $error_list;
    
}