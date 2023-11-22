<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Params;

use AdOceanSdk\RequestParams;

class ReportSitePageGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var string $site_id 站点ID
     */
    public string $site_id;
    
    /**
     * @var string $time_duration 查询时间周期。DAY:1天。THREE_DAY: 3天。WEEK:7天。MONTH:30天。
     */
    public string $time_duration;
    
    /**
     * @var string $inventory_type 首选投放位置。不传默认查全部。WATERMELON:西瓜。HOTSOON:火山。AWEME:抖音。TOUTIAO: 头条。UNION_SLOT:穿山甲。
     */
    public string $inventory_type;
    
}