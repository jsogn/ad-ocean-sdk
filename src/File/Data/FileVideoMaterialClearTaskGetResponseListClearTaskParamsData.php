<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 任务的参数
class FileVideoMaterialClearTaskGetResponseListClearTaskParamsData extends Data
{

    /**
     * @var array<int> $material_ids 待清理的素材列表
     */
    public array $material_ids;
    
    /**
     * @var array<string> $clear_material_types 清理素材类型：
     */
    public array $clear_material_types;
    
    /**
     * @var string $create_time_upper 清理此日期之前创建的素材，格式为"yyyy-mm-dd"，不包含该日期
     */
    public string $create_time_upper;
    
    /**
     * @var string $start_time 账户下累积转化数和累积消耗数的数据统计开始时间，格式为"yyyy-mm-dd"，包含该日期
     */
    public string $start_time;
    
    /**
     * @var string $end_time 账户下累积转化数和累积消耗数的数据统计结束时间，格式为"yyyy-mm-dd"，包含该日期
     */
    public string $end_time;
    
    /**
     * @var string $material_source 清理的素材来源:
     */
    public string $material_source;
    
    /**
     * @var int $convert 账户下累积转化数，在start_time和end_time期间发生的累积转化数，清理小于该累积转化数的素材
     */
    public int $convert;
    
    /**
     * @var float $cost 账户下累积消耗，在start_time和end_time期间发生的累积消耗，清理小于该累积消耗的素材
     */
    public float $cost;
    
}