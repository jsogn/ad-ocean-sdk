<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class ToolsQuotaGetResponseData extends Data
{

    /**
     * @var int $used_quota 在投计划数
     */
    public int $used_quota;
    
    /**
     * @var int $sum_quota 在投计划配额
     */
    public int $sum_quota;
    
    /**
     * @var bool $in_learning 是否在学习期，学习期即初始期，详细规则请进入巨量广告投放平台-工具-在投计划配额界面查看
     */
    public bool $in_learning;
    
    /**
     * @var int $max_cost 最高月消耗
     */
    public int $max_cost;
    
}