<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 任务参数，若同时填写多项任务的参数，则最终返回各个参数的交集
class FileVideoMaterialClearTaskCreatePostParamClearTaskParamsData extends Data
{

    /**
     * @var string $material_source 清理素材来源
     */
    public string $material_source;

    /**
     * @var array<int> $material_ids 待清理素材id列表，单次最多支持100个
     */
    public array $material_ids;

    /**
     * @var array<string> $clear_material_types 清理素材类型，允许值：INEFFICIENT_MATERIAL低效素材；SIMILAR_MATERIAL 同质化挤压严重素材；SIMILAR_QUEUE_MATERIAL同质化排队素材
     */
    public array $clear_material_types;

    /**
     * @var string $create_time_upper 清理创建时间"yyyy-mm-dd"之前的素材，不包括这一天
     */
    public string $create_time_upper;

    /**
     * @var string $start_time 账户下累积转化数和累积消耗数的数据统计开始时间，格式为"yyyy-mm-dd"，且包含该日期
     */
    public string $start_time;

    /**
     * @var string $end_time 账户下累积转化数和累积消耗数的数据统计结束时间，格式为"yyyy-mm-dd"，且包含该日期
     */
    public string $end_time;

    /**
     * @var int $convert 账户下累积转化数，在start_time和end_time期间发生的累积转化数，清理小于该累积转化数的素材
     */
    public int $convert;

    /**
     * @var float $cost 账户下累积消耗，在start_time和end_time期间发生的累积消耗，清理小于该累积消耗的素材
     */
    public float $cost;

}