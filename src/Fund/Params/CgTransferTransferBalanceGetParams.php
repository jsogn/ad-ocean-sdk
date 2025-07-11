<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Params;

use AdOceanSdk\RequestParams;

class CgTransferTransferBalanceGetParams extends RequestParams
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
     * @var array<int> $target_id_list 查询账户id列表(限制长度100)
     */
    public array $target_id_list;
    
    /**
     * @var string $platform 业务线 可选值: AD 广告BENDITUI 本地推
     */
    public string $platform;
    
}