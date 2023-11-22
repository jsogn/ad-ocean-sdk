<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class ToolsPreAuditGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsPreAuditGetResponseListData> $list 前置预审结果列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\ToolsPreAuditGetResponseListData::class)]
    public array $list;
    
    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;
    
}