<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 批量修改投放时间，限制最多批量修改10个项目
class ProjectScheduleTimeUpdatePostParamData extends Data
{

    /**
     * @var int $project_id 项目ID
     */
    public int $project_id;
    
    /**
     * @var string $schedule_type 投放时间类型，允许值：
     */
    public string $schedule_type;
    
    /**
     * @var int $end_time 结束的投放时间，当schedule_type 为SCHEDULE_START_END时必填
     */
    public int $end_time;
    
}