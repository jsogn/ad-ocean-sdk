<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Params;

use AdOceanSdk\RequestParams;

class AdvertiserFundTransactionGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var string $start_date 开始时间，格式YYYY-MM-DD
     */
    public string $start_date;
    
    /**
     * @var string $end_date 结束时间，格式YYYY-MM-DD
     */
    public string $end_date;
    
    /**
     * @var string $transaction_type 流水类型，详见附录【流水类型】. 允许值: "RECHARGE", "TRANSFER"
     */
    public string $transaction_type;
    
    /**
     * @var string $page 页码. 默认值:1
     */
    public string $page;
    
    /**
     * @var string $page_size 页面数据量. 默认值:10
     */
    public string $page_size;
    
}