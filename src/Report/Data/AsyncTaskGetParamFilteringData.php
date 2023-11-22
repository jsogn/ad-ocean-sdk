<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Data;

use AdOceanSdk\Kernel\Data\Data;

// 筛选条件
class AsyncTaskGetParamFilteringData extends Data
{

    /**
     * @var array<int> $task_ids 任务 id。最多 10 个
     */
    public array $task_ids;
    
    /**
     * @var string $task_name 任务名称。
     */
    public string $task_name;
    
}