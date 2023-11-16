<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Params;

use AdOceanSdk\RequestParams;

class AdvertiserUpdatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var string $name 账户名称
     */
    public string $name;
    
    /**
     * @var string $contacter 联系人
     */
    public string $contacter;
    
    /**
     * @var string $phonenumber 手机号码
     */
    public string $phonenumber;
    
    /**
     * @var string $telephone 固定电话
     */
    public string $telephone;
    
    /**
     * @var string $note 备注
     */
    public string $note;
    
}