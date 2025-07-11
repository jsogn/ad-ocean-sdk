<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Params;

use AdOceanSdk\RequestParams;

class CgTransferCanTransferTargetListGetParams extends RequestParams
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
     * @var int $opponent_target_id 锚定账户id，查询该账户的可转账账户列表
     */
    public int $opponent_target_id;
    
    /**
     * @var string $transfer_direction 转账方向，以可转列表视角确定 可选值: TRANSFER_IN 转入TRANSFER_OUT 转出
     */
    public string $transfer_direction;
    
    /**
     * @var string $platform 业务线 可选值: AD 广告BENDITUI 本地推
     */
    public string $platform;
    
    /**
     * @var int $page 页码,从1开始
     */
    public int $page;
    
    /**
     * @var int $page_size 每页最多100
     */
    public int $page_size;
    
}