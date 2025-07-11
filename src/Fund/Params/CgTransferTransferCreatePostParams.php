<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Params;

use AdOceanSdk\RequestParams;

class CgTransferTransferCreatePostParams extends RequestParams
{

    /**
     * @var int $organization_id 组织id
     */
    public int $organization_id;
    
    /**
     * @var string $biz_request_no 请求幂等id，同一biz_request_no发起转账代表同一转账申请，返回的转账单号相同，推荐uuid
     */
    public string $biz_request_no;
    
    /**
     * @var int $opponent_target_id 锚定账户id，1:N的1
     */
    public int $opponent_target_id;
    
    /**
     * @var array<\AdOceanSdk\Fund\Data\CgTransferTransferCreatePostParamTargetDetailListData> $target_detail_list 目标账户列表，1:N的N，需要列表内账户类型相同，最多支持100个
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Fund\Data\CgTransferTransferCreatePostParamTargetDetailListData::class)]
    public array $target_detail_list;
    
    /**
     * @var string $transfer_direction 转账方向，以目标账户视角确定 可选值: TRANSFER_IN 转入TRANSFER_OUT 转出
     */
    public string $transfer_direction;
    
    /**
     * @var string $remark 备注
     */
    public string $remark;
    
    /**
     * @var string $platform 转账业务线 可选值: AD 广告BENDITUI 本地推
     */
    public string $platform;
    
}