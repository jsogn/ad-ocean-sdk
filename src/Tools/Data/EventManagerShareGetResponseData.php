<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class EventManagerShareGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Tools\Data\EventManagerShareGetResponseListData> $list 共享账户ID（adv+bpid+枚举值）集合
     */
    public array $list;
    
    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;
    
}