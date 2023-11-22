<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class EventManagerSharePostParams extends RequestParams
{

    /**
     * @var int $organization_id 纵横组织id
     */
    public int $organization_id;
    
    /**
     * @var int $asset_id 资产id
     */
    public int $asset_id;
    
    /**
     * @var string $share_mode 共享模式，可选值:ALL: 组织下某业务线账户PART: 指定账户共享
     */
    public string $share_mode;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\EventManagerSharePostParamAccountInfosData> $account_infos 共享账户信息，一次最多操作10个当share_mode="PART"时必填
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\EventManagerSharePostParamAccountInfosData::class)]
    public array $account_infos;
    
    /**
     * @var array<string> $all_account_type 共享账户业务线当share_mode="ALL"时必填，可选值：:AD
     */
    public array $all_account_type;
    
}