<?php

declare(strict_types=1);

namespace AdOceanSdk\Majordomo\Data;

use AdOceanSdk\Kernel\Data\Data;

// 过滤条件
class BusinessPlatformPartnerOrganizationListGetParamFilteringData extends Data
{

    /**
     * @var array<int> $partner_organization_ids 合作的巨量纵横组织id，最大不超过200
     */
    public array $partner_organization_ids;
    
    /**
     * @var array<string> $status 合作状态，默认查询绑定成功的状态允许值：BOUND（已绑定）、BINDING（绑定中）、INVALID（失效）、DELETED（删除）
     */
    public array $status;
    
}