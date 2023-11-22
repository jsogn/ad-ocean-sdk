<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Params;

use AdOceanSdk\RequestParams;

class CustomerCenterAdvertiserTransferableListGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id  广告主id
     */
    public int $advertiser_id ;
    
    /**
     * @var string $transfer_account_type 广告账户类型
     */
    public string $transfer_account_type;
    
    /**
     * @var int $page 页码，默认值1
     */
    public int $page;
    
    /**
     * @var int $page_size 页面大小，默认值20
     */
    public int $page_size;
    
}