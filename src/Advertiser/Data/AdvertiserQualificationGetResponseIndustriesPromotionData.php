<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// 推广资质，相关字段见下
class AdvertiserQualificationGetResponseIndustriesPromotionData extends Data
{

    /**
     * @var int $qualification_id 资质id
     */
    public int $qualification_id;
    
    /**
     * @var string $content 推广内容
     */
    public string $content;
    
    /**
     * @var string $status 状态，枚举值：STATUS_NOT_SUBMIT 未提交、STATUS_WAIT_CONFIRM 待审核、STATUS_PENDING_CONFIRM 审核中、STATUS_CONFIRM 审核通过、STATUS_CONFIRM_FAIL 审核不通过
     */
    public string $status;
    
    /**
     * @var string $reject_reason 拒绝理由
     */
    public string $reject_reason;
    
}