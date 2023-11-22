<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class AdvConvertOleConvertPostParams extends RequestParams
{

    /**
     * @var int $advertiser_id  广告主id
     */
    public int $advertiser_id ;
    
    /**
     * @var string $date_start_time  订单所在自然日范围 开始时间，格式 yyyy-MM-dd。假设获取8.16数据，则填写2023-08-16。获取8.16-8.17数据，则填写2023-08-16。
     */
    public string $date_start_time ;
    
    /**
     * @var string $date_end_time  订单所在自然日范围 结束时间，格式 yyyy-MM-dd。假设获取8.16数据，则填写2023-08-16。获取8.16-8.17数据，则填写2023-08-17。
     */
    public string $date_end_time ;
    
    /**
     * @var string $order_start_time  下单时间范围 开始时间，可精确到分钟。格式 yyyy-MM-dd HH:mm:ss，示例 2023-08-16 12:00:00
     */
    public string $order_start_time ;
    
    /**
     * @var string $order_end_time  下单时间范围 结束时间，可精确到分钟。格式 yyyy-MM-dd HH:mm:ss，示例 2023-08-16 13:00:00
     */
    public string $order_end_time ;
    
}