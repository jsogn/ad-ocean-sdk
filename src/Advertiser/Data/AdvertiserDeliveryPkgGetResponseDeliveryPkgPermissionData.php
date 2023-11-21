<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// 权限信息
class AdvertiserDeliveryPkgGetResponseDeliveryPkgPermissionData extends Data
{

    /**
     * @var bool $can_edit 是否支持编辑
     */
    public bool $can_edit;
    
    /**
     * @var string $cant_edit_reason 不支持编辑的原因
     */
    public string $cant_edit_reason;
    
    /**
     * @var bool $can_delete 是否支持编辑
     */
    public bool $can_delete;
    
    /**
     * @var string $cant_delete_reason 不支持删除的原因
     */
    public string $cant_delete_reason;
    
}