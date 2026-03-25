<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 电商平台多ROI系数设置，引流电商多平台投放ROI系数及平台信息，可按照电商平台分别确定ROI系数，分平台调控出价，此能力白名单开放。list长度最长为4
class ProjectRoigoalUpdatePostParamShopMultiRoiGoalsData extends Data
{

    /**
     * @var float $roi_goal ROI系数值，范围[0.01,100]，精度：最多保留小数点后四位
     */
    public float $roi_goal;

    /**
     * @var string $shop_platform 可选值: JD 京东OTHER 其他PDD 拼多多TB 淘宝
     */
    public string $shop_platform;

}