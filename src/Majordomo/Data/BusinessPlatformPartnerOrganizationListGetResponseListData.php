<?php

declare(strict_types=1);

namespace AdOceanSdk\Majordomo\Data;

use AdOceanSdk\Kernel\Data\Data;

// 应用列表
class BusinessPlatformPartnerOrganizationListGetResponseListData extends Data
{

    /**
     * @var int $partner_organization_id 发起合作组织请求的组织id
     */
    public int $partner_organization_id;
    
    /**
     * @var string $status 合作状态枚举值：BOUND（已绑定）、BINDING（绑定中）、INVALID（失效）、DELETED（删除）
     */
    public string $status;
    
    /**
     * @var string $remark 备注，合作组织备注信息
     */
    public string $remark;
    
}