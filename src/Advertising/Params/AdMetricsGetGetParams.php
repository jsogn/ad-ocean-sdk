<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Params;

use AdOceanSdk\RequestParams;

class AdMetricsGetGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var array<int> $ad_ids 广告计划ID组
     */
    public array $ad_ids;
    
    /**
     * @var string $start_time 统计开始时间，格式yyyy-mm-dd，示例：2022-09-01
     */
    public string $start_time;
    
    /**
     * @var string $end_time 统计结束时间，格式yyyy-mm-dd，示例：2022-09-14
     */
    public string $end_time;
    
}