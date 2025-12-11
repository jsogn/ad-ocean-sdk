<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Params;

use AdOceanSdk\RequestParams;

class ProjectWeekScheduleUpdatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主账户id
     */
    public int $advertiser_id;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\ProjectWeekScheduleUpdatePostParamData> $data 批量修改投放时段，限制最多批量修改10个项目
     */
    public array $data;
    
}