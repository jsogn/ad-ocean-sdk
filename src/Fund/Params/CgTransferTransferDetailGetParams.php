<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Params;

use AdOceanSdk\RequestParams;

class CgTransferTransferDetailGetParams extends RequestParams
{

    /**
     * @var int $organization_id 组织id
     */
    public int $organization_id;
    
    /**
     * @var string $biz_request_no 请求id，推荐uuid，方便请求链路对齐
     */
    public string $biz_request_no;
    
    /**
     * @var string $transfer_biz_request_no 发起转账的幂等id
     */
    public string $transfer_biz_request_no;
    
    /**
     * @var string $transfer_serial 转账单号，与transfer_biz_request_no两者传其一即可
     */
    public string $transfer_serial;
    
    /**
     * @var string $platform 转账业务线 可选值: AD 广告BENDITUI 本地推
     */
    public string $platform;
    
}