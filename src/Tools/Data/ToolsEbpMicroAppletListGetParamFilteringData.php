<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 过滤条件
class ToolsEbpMicroAppletListGetParamFilteringData extends Data
{

    /**
     * @var string $audit_status 审核状态筛选，允许值：AUDIT_ACCEPTED 审核通过AUDITING 审核中AUDIT_REJECTED 审核不通过ALL 全部
     */
    public string $audit_status;

    /**
     * @var string $search_key 搜索名称或appid关键字
     */
    public string $search_key;

    /**
     * @var string $asset_ownership 资产来源筛选，允许值：CREATE 入参组织创建的SHARE 入参组织被共享的
     */
    public string $asset_ownership;

    /**
     * @var array<int> $instance_ids 小程序资产ID
     */
    public array $instance_ids;

}