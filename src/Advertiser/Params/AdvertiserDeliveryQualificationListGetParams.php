<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Params;

use AdOceanSdk\RequestParams;

class AdvertiserDeliveryQualificationListGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var string $qualification_type 资质类型，允许值：
     */
    public string $qualification_type;
    
    /**
     * @var string $status 状态，允许值：
     */
    public string $status;
    
    /**
     * @var int $page 页数默认值：1，page范围为[1,1000]
     */
    public int $page;
    
    /**
     * @var int $page_size 页面大小默认值：10，page_size范围为[1,100]
     */
    public int $page_size;
    
}