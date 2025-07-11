<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Params;

use AdOceanSdk\RequestParams;

class CgTransferCanTransferBalanceGetParams extends RequestParams
{

    /**
     * @var int $organization_id 组织id
     */
    public int $organization_id;
    
    /**
     * @var string $biz_request_no 请求id
     */
    public string $biz_request_no;
    
    /**
     * @var int $opponent_target_id 锚定账户id，1:N的1
     */
    public int $opponent_target_id;
    
    /**
     * @var array<int> $target_id_list 目标账户id列表，1:N的N，最多支持100个
     */
    public array $target_id_list;
    
    /**
     * @var string $transfer_direction 转账方向，以目标账户视角确定 可选值: TRANSFER_IN 转入TRANSFER_OUT 转出
     */
    public string $transfer_direction;
    
    /**
     * @var string $platform 转账业务线 可选值: AD 广告BENDITUI 本地推
     */
    public string $platform;
    
}