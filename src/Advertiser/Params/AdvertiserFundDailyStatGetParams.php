<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Params;

use AdOceanSdk\RequestParams;

class AdvertiserFundDailyStatGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var string $start_date 开始时间，格式YYYY-MM-DD，默认当前年份的1月1日
     */
    public string $start_date;
    
    /**
     * @var string $end_date 结束时间，格式YYYY-MM-DD，默认为今天，起止时间间隔不能超过一年。
     */
    public string $end_date;
    
    /**
     * @var string $page 页码. 默认值:1，注意：page*page_size不可大于10000
     */
    public string $page;
    
    /**
     * @var string $page_size 页面数据量. 默认值:10
     */
    public string $page_size;
    
}