<?php

declare(strict_types=1);

namespace AdOceanSdk\Agent\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class AgentAdvertiserSelectGetResponseData extends Data
{

    /**
     * @var array $list 广告主ID列表
     */
    public array $list;
    
    /**
     * @var string $account_source 账号列表的账号类型。枚举值：AD广告主、STAR星图、LUBAN鲁班、DOMESTIC入海
     */
    public string $account_source;
        /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;
    
    /**
     * @var \AdOceanSdk\Agent\Data\AgentAdvertiserSelectGetResponseCursorInfoData $cursor_info 分页信息
     */
    public \AdOceanSdk\Agent\Data\AgentAdvertiserSelectGetResponseCursorInfoData $cursor_info;
    
}