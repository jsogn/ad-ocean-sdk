<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class EventManagerShareCancelPostResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Tools\Data\EventManagerShareCancelPostResponseErrorListData> $error_list 取消共享失败的账户ID及原因列表
     */
    public array $error_list;
    
}