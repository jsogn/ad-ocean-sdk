<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Data;

use AdOceanSdk\Kernel\Data\Data;

// 过滤条件。获取方式：1.巨量引擎体验版—>报表—>新建/编辑自定义报表—>API参数生成。该字段从前端自定义报表中获取，建议不要修改。2.可通过【获取自定义报表可用维度和指标】接口获取不同数据主题下的可用维度和指标
class ReportCustomGetParamFiltersData extends Data
{

    /**
     * @var string $field 过滤的消耗指标字段
     */
    public string $field;
    
    /**
     * @var int $type 字段类型。允许值：
     */
    public int $type;
    
    /**
     * @var int $operator 处理方式。 允许值：
     */
    public int $operator;
    
    /**
     * @var array<string> $values 过滤字段具体值
     */
    public array $values;
    
}