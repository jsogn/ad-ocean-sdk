<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Params;

use AdOceanSdk\RequestParams;

class ProjectScheduleTimeUpdatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主账户id
     */
    public int $advertiser_id;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\ProjectScheduleTimeUpdatePostParamData> $data 批量修改投放时间，限制最多批量修改10个项目
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\ProjectScheduleTimeUpdatePostParamData::class)]
    public array $data;
    
}