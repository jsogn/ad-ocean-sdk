<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 过滤条件
class ToolsPreAuditGetParamFilterData extends Data
{

    /**
     * @var array<int> $pre_audit_ids 前置预审ID列表
     */
    public array $pre_audit_ids;
    
    /**
     * @var string $material_type 前置预审物料类型，允许值：IMG图片物料、SITE落地页物料、TITLE文本物料、VIDEO视频物料
     */
    public string $material_type;
    
    /**
     * @var array<string> $contents 前置预审物料TITLE文本物料：文本内容IMG图片物料：图片URLVIDEO视频物料：视频IDSITE落地页物料：落地页URL
     */
    public array $contents;
    
}