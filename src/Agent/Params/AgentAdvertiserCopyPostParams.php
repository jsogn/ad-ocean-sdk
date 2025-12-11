<?php

declare(strict_types=1);

namespace AdOceanSdk\Agent\Params;

use AdOceanSdk\RequestParams;

class AgentAdvertiserCopyPostParams extends RequestParams
{

    /**
     * @var int $agent_id 代理商账户ID
     */
    public int $agent_id;
    
    /**
     * @var int $advertiser_id 被复制广告主账户ID
     */
    public int $advertiser_id;
    
    /**
     * @var array<\AdOceanSdk\Agent\Data\AgentAdvertiserCopyPostParamItemData> $item 复制账户信息
     */
    public array $item;
    
    /**
     * @var bool $copy_tag 是否复制原广告主账户的账户标签
     */
    public bool $copy_tag;
    
    /**
     * @var string $report_type 自运营报备类型 可选值:
     */
    public string $report_type;
    
}