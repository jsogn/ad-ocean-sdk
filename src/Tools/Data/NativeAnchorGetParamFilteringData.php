<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 过滤器
class NativeAnchorGetParamFilteringData extends Data
{

    /**
     * @var string $anchor_id 按原生锚点id 做过滤
     */
    public string $anchor_id;
    
    /**
     * @var string $anchor_name 按原生锚点名称做过滤
     */
    public string $anchor_name;
    
    /**
     * @var array<string> $status 锚点审核状态，允许值：锚点新建：CREATE、审核通过：AUDIT_SUCCESS、审核不通过：AUDIT_FAILD
     */
    public array $status;
    
    /**
     * @var string $landing_type 允许值：LINK销售线索收集、APP应用、AWEME抖音号推广
     */
    public string $landing_type;
    
    /**
     * @var string $external_action 优化目标，可通过【获取优化目标】接口获取
     */
    public string $external_action;
    
    /**
     * @var string $source 锚点来源，允许值：自动生成：AUTO、手动创建：MANUAL、CUSTOM
     */
    public string $source;
    
    /**
     * @var array<string> $anchor_type 锚点类型，允许值：
     */
    public array $anchor_type;
    
    /**
     * @var string $android_package_name 安卓应用包名
     */
    public string $android_package_name;
    
    /**
     * @var string $ios_package_name ios应用包名
     */
    public string $ios_package_name;
    
    /**
     * @var string $anchor_start_time 锚点创建开始日期，格式：YYYY-MM-DD
     */
    public string $anchor_start_time;
    
    /**
     * @var string $anchor_end_time 锚点创建结束日期，格式：YYYY-MM-DD
     */
    public string $anchor_end_time;
    
}