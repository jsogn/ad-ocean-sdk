<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 自定义筛选条件（商品投放条件）。用于圈定商品投放范围，结合商品库字段搭配判断条件，圈定商品投放范围。获取商品库元信息-商品广告-商业开放平台
class ProjectUpdatePostParamDpaProductTargetData extends Data
{

    /**
     * @var string $title 筛选字段
     */
    public string $title;
    
    /**
     * @var string $rule 定向规则，允许值：type 为int、 double、 long其中一种时支持=、 !=、 >、 <；
     */
    public string $rule;
    
    /**
     * @var string $type 字段类型，允许值：int、 double、 long、 string
     */
    public string $type;
    
    /**
     * @var string $value 规则值
     */
    public string $value;
    
}