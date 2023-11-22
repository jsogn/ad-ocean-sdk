<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 批量修改预算，list长度限制1～10
class ProjectBudgetUpdatePostParamData extends Data
{

    /**
     * @var int $project_id 项目ID
     */
    public int $project_id;
    
    /**
     * @var string $budget_mode 允许值:
     */
    public string $budget_mode;
    
    /**
     * @var float $budget 项目预算，取值范围: ≥ 300 当budget_mode = BUDGET_MODE_DAY时有效且必填
     */
    public float $budget;
    
}