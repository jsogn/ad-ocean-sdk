<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 过滤条件
class ToolsEbpWechatAppletListGetParamFilteringData extends Data
{

    /**
     * @var string $name 小程序名称或备注的模糊匹配
     */
    public string $name;

    /**
     * @var string $search_key 搜索条件
     */
    public string $search_key;

    /**
     * @var string $asset_ownership 资产归属关系类型，允许值：
     */
    public string $asset_ownership;

    /**
     * @var string $audit_status 审核状态，允许值：AUDIT_ACCEPTED 审核成功AUDITING 审核中AUDIT_REJECTED 审核失败ALL 查全部
     */
    public string $audit_status;

    /**
     * @var string $username 原始ID
     */
    public string $username;

}