<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 批量修改预算，list长度限制1～10
class PromotionBudgetUpdatePostParamData extends Data
{

    /**
     * @var int $promotion_id 广告ID
     */
    public int $promotion_id;
    
    /**
     * @var string $budget_mode 该广告所属的预算类型, （预算类型不支持修改，且需要上传）。允许值:BUDGET_DAY日预算（默认值）,BUDGET_TOTAL总预算
     */
    public string $budget_mode;
    
    /**
     * @var float $budget 预算（总预算或日预算）
     */
    public float $budget;
    
}