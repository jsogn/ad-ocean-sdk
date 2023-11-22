<?php

declare(strict_types=1);

namespace AdOceanSdk\Agent\Data;

use AdOceanSdk\Kernel\Data\Data;

// 复制结果，包括单个账户的失败原因
class AgentAdvertiserCopyPostResponseItemData extends Data
{

    /**
     * @var bool $success 复制是否成功
     */
    public bool $success;
    
    /**
     * @var string $error_msg 当失败时，返回的失败原因
     */
    public string $error_msg;
    
    /**
     * @var int $advertiser_id 广告主账户ID
     */
    public int $advertiser_id;
    
    /**
     * @var string $name 广告主账户名称
     */
    public string $name;
    
}