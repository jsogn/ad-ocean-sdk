<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 前置预审结果列表
class ToolsPreAuditGetResponseListData extends Data
{

    /**
     * @var int $pre_audit_id 前置预审ID列表
     */
    public int $pre_audit_id;
    
    /**
     * @var string $material_type 物料类型 枚举值：IMG图片物料、SITE落地页物料、TITLE文本物料、VIDEO视频物料
     */
    public string $material_type;
    
    /**
     * @var string $content 物料内容
     */
    public string $content;
    
    /**
     * @var string $status 审核状态 枚举值:AUDITING: 审核中、AUDIT_ACCEPTED审核通过、AUDIT_FAILED前置预审失败、AUDIT_REJECTED审核拒绝
     */
    public string $status;
    
    /**
     * @var string $reject_reason 拒绝理由
     */
    public string $reject_reason;
    
}