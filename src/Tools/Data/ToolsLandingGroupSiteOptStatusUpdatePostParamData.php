<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 操作站点
class ToolsLandingGroupSiteOptStatusUpdatePostParamData extends Data
{

    /**
     * @var int $member_id 成员 ID，即站点在落地页组中的唯一标识
     */
    public int $member_id;
    
    /**
     * @var string $site_opt_status 站点启用状态，详见【附录-枚举值】，可选值:SITE_OPT_STATUS_DISABLE,SITE_OPT_STATUS_ENABLE
     */
    public string $site_opt_status;
    
}