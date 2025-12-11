<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class ToolsPromotionRaiseVersionGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsPromotionRaiseVersionGetResponseRaiseVersionListData> $raise_version_list 起量版本列表
     */
    public array $raise_version_list;
    
    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;
    
}