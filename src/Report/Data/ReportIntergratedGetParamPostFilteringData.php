<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Data;

use AdOceanSdk\Kernel\Data\Data;

// 后置过滤条件，即聚合之后进行过滤。类似于 sql 语法中的 having
class ReportIntergratedGetParamPostFilteringData extends Data
{

    /**
     * @var \AdOceanSdk\Report\Data\ReportIntergratedGetParamPostFilteringCostData $cost 按总消耗过滤，左闭右开区间，正负均可，min必须小于max
     */
    public \AdOceanSdk\Report\Data\ReportIntergratedGetParamPostFilteringCostData $cost;
    
    /**
     * @var \AdOceanSdk\Report\Data\ReportIntergratedGetParamPostFilteringConvertData $convert 按转化数过滤，左闭右开区间，正负均可，min必须小于max
     */
    public \AdOceanSdk\Report\Data\ReportIntergratedGetParamPostFilteringConvertData $convert;
    
    /**
     * @var \AdOceanSdk\Report\Data\ReportIntergratedGetParamPostFilteringConvertCostData $convert_cost 按转化成本过滤，左闭右开区间，正负均可，min必须小于max
     */
    public \AdOceanSdk\Report\Data\ReportIntergratedGetParamPostFilteringConvertCostData $convert_cost;
    
}