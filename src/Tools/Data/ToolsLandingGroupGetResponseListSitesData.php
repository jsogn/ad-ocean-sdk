<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 站点列表
class ToolsLandingGroupGetResponseListSitesData extends Data
{

    /**
     * @var int $member_id 成员 ID，即站点在落地页组中的唯一标识
     */
    public int $member_id;
    
    /**
     * @var int $site_id 站点 ID
     */
    public int $site_id;
    
    /**
     * @var string $site_url 站点URL
     */
    public string $site_url;
    
    /**
     * @var string $site_opt_status 站点启用状态。详见【附录-落地页站点启用状态】
     */
    public string $site_opt_status;
    
    /**
     * @var string $site_audit_status 站点审核状态。详见【附录-落地页组站点审核状态】
     */
    public string $site_audit_status;
    
}