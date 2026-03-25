<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Params;

use AdOceanSdk\RequestParams;

class ProjectRoigoalUpdatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 投放账户id
     */
    public int $advertiser_id;

    /**
     * @var array<\AdOceanSdk\Advertising\Data\ProjectRoigoalUpdatePostParamData> $data 批量修改项目ROI系数，list长度限制10
     */
    public array $data;

}