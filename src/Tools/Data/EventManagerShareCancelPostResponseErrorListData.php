<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 取消共享失败的账户ID及原因列表
class EventManagerShareCancelPostResponseErrorListData extends Data
{

    /**
     * @var string $share_mode 取消共享类型
     */
    public string $share_mode;
    
    /**
     * @var \AdOceanSdk\Tools\Data\EventManagerShareCancelPostResponseErrorListAccountInfoData $account_info 取消共享账号信息
     */
    public \AdOceanSdk\Tools\Data\EventManagerShareCancelPostResponseErrorListAccountInfoData $account_info;
    
    /**
     * @var string $all_account_type 账户类型
     */
    public string $all_account_type;
    
    /**
     * @var string $error_message 错误信息
     */
    public string $error_message;
    
}