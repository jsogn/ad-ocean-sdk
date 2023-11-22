<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsSiteUpdateStatusPostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主id， 传的这个advertiser_id的数字的范围：1 <= advertiser_id <=MAX_INT64
     */
    public int $advertiser_id;
    
    /**
     * @var array<string> $site_ids 橙子建站站点id列表 ：1 <= 长度 <= 20可通过【获取橙子建站站点列表】获取应答字段list
     */
    public array $site_ids;
    
    /**
     * @var string $status 站点操作状态详见：【站点操作状态】
     */
    public string $status;
    
}