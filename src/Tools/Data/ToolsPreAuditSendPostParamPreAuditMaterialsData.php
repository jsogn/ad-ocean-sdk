<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 前置预审物料列表
class ToolsPreAuditSendPostParamPreAuditMaterialsData extends Data
{

    /**
     * @var string $type 前置预审物料类型，允许值：IMG图片物料、SITE落地页物料、TITLE文本物料、VIDEO视频物料
     */
    public string $type;
    
    /**
     * @var string $content 前置预审物料TITLE文本物料：文本内容IMG图片物料：图片URLVIDEO视频物料：视频IDSITE落地页物料：落地页URL
     */
    public string $content;
    
}