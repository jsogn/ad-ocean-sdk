<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class ToolsPreAuditSendPostResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsPreAuditSendPostResponseListData> $list 前置预审送审结果列表
     */
    public array $list;
    
}