<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 前置预审送审结果列表
class ToolsPreAuditSendPostResponseListData extends Data
{

    /**
     * @var int $pre_audit_id 前置预审ID
     */
    public int $pre_audit_id;
    
    /**
     * @var string $type 物料类型，枚举值：IMG图片物料、SITE落地页物料、TITLE文本物料、VIDEO视频物料
     */
    public string $type;
    
    /**
     * @var string $content 前置预审物料TITLE文本物料：文本内容IMG图片物料：图片URLVIDEO视频物料：视频IDSITE落地页物料：落地页URL
     */
    public string $content;
    
}