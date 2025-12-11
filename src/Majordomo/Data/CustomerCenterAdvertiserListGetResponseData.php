<?php

declare(strict_types=1);

namespace AdOceanSdk\Majordomo\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class CustomerCenterAdvertiserListGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Majordomo\Data\CustomerCenterAdvertiserListGetResponseListData> $list 账户列表
     */
    public array $list;
        /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;
    
}