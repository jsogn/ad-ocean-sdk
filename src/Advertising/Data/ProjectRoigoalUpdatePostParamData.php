<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 批量修改项目ROI系数，list长度限制10
class ProjectRoigoalUpdatePostParamData extends Data
{

    /**
     * @var int $project_id 项目ID
     */
    public int $project_id;

    /**
     * @var float $roi_goal 深度转化ROI系数，填写要求如下：
     */
    public float $roi_goal;

    /**
     * @var array<\AdOceanSdk\Advertising\Data\ProjectRoigoalUpdatePostParamShopMultiRoiGoalsData> $shop_multi_roi_goals 电商平台多ROI系数设置，引流电商多平台投放ROI系数及平台信息，可按照电商平台分别确定ROI系数，分平台调控出价，此能力白名单开放。list长度最长为4
     */
    public array $shop_multi_roi_goals;

}