<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 批量修改投放时段，限制最多批量修改10个项目
class ProjectWeekScheduleUpdatePostParamData extends Data
{

    /**
     * @var int $project_id 项目ID
     */
    public int $project_id;
    
    /**
     * @var string $schedule_time 更新后的投放时段，格式是48*7位字符串，且都是0或1。也就是以半个小时为最小粒度，周一至周日每天分为48个区段，0为不投放，1为投放，不传、全传0、全传1均代表全时段投放。
     */
    public string $schedule_time;
    
    /**
     * @var string $schedule_scene 生效方式，允许值：
     */
    public string $schedule_scene;
    
}