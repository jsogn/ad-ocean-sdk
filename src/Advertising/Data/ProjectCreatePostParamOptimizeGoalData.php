<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 优化目标
class ProjectCreatePostParamOptimizeGoalData extends Data
{

    /**
     * @var array<int> $asset_ids 事件管理资产 id，list长度上限为 1（landing_type=LINK且asset_type=MICRO_APP 、WECHAT_APPLET时上限为2）landing_type=APP 子目标为DOWNLOAD或者LAUNCH时有效且必填;landing_type=LINK或SHOP或DPA落地页类型为THIRDPARTY时有效且必填;landing_type=LINK 、SHOP或DPA落地页类型为ORANGE时无需传入，仅需传入external_action;
     */
    public array $asset_ids;
    
    /**
     * @var string $external_action 优化目标，可通过【资产-事件管理-获取可用优化目标(体验版)】查询获取
     */
    public string $external_action;
    
    /**
     * @var int $paid_switch 字节提供的归因方式，允许值：
     */
    public int $paid_switch;
    
    /**
     * @var string $deep_external_action 深度转化目标，可通过【资产-事件管理-获取可用优化目标(体验版)】查询获取
     */
    public string $deep_external_action;
    
}