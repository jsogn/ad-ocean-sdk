<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 筛选条件
class ToolsEbpVideoAttributesListGetParamFilteringData extends Data
{

    /**
     * @var array<int> $material_ids 按素材ID筛选，范围为1-1000
     */
    public array $material_ids;

    /**
     * @var array<string> $material_properties 筛选素材标签，同时传入多个筛选项时，多个值之间为「或」的关系，可选值:
     */
    public array $material_properties;

    /**
     * @var string $start_time 起始日期，表示按照素材上传到账户下的时间过滤，格式为yyyy-mm-dd HH:MM:SS
     */
    public string $start_time;

    /**
     * @var string $end_time 结束日期，表示过滤出一段时间内上传的素材，格式为yyyy-mm-dd HH:MM:SS
     */
    public string $end_time;

}