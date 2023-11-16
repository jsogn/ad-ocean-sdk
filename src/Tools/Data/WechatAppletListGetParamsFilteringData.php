<?php
declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

class WechatAppletListGetParamsFilteringData extends Data
{
    /**
     * @var string $name 小程序名称或备注的模糊匹配
     */
    public string $name;

    /**
     * @var string $audit_status 审核状态
     */
    public string $audit_status;

    /**
     * @var string $search_type 搜索类型
     */
    public string $search_type;

    /**
     * @var WechatAppletListGetParamsFilteringCreateTimeData $create_time 按创建时间查询的时间范围
     */
    public WechatAppletListGetParamsFilteringCreateTimeData $create_time;
}