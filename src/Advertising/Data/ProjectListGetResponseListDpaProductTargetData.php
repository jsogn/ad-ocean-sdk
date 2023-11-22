<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 自定义筛选条件（商品投放条件）
class ProjectListGetResponseListDpaProductTargetData extends Data
{

    /**
     * @var string $title 筛选字段
     */
    public string $title;
    
    /**
     * @var string $rule 定向规则
     */
    public string $rule;
    
    /**
     * @var string $type 字段类型
     */
    public string $type;
    
    /**
     * @var string $value 规则值
     */
    public string $value;
    
}