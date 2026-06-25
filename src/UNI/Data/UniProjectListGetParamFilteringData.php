<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Data;

use AdOceanSdk\Kernel\Data\Data;

// 过滤器
class UniProjectListGetParamFilteringData extends Data
{

    /**
     * @var array<int> $project_id 按项目ID过滤，范围为1-100
     */
    public array $project_id;

    /**
     * @var string $name （两个英文字符占1个字，该字段采取模糊查询的方式。）项目名称，长度是1-50个字
     */
    public string $name;

    /**
     * @var string $status_first 项目一级状态过滤，允许值： PROJECT_STATUS_DELETE 已删除PROJECT_STATUS_DISABLE 未投放PROJECT_STATUS_DONE 已完成PROJECT_STATUS_ENABLE 启用中PROJECT_STATUS_FROZEN 已终止不传默认返回不限（不含已删除）
     */
    public string $status_first;

    /**
     * @var string $status_second 项目二级状态过滤，允许值： ADVERTISER_AVATAR_OFFLINE 未投放-账户头像不可投PROJECT_STATUS_OFFLINE_AUDIT未投放-审核不通过PROJECT_STATUS_AUDIT未投放- 新建审核中PROJECT_STATUS_REAUDIT未投放-修改审核中PROJECT_STATUS_STOP 未投放-手动暂停PROJECT_STATUS_ADV_OFFLINE_BUDGET 未投放-账户余额不足PROJECT_STATUS_OFFLINE_BUDGET 未投放-账户超预算PROJECT_STATUS_BUDGET_EXCEED 未投放-项目超出预算PROJECT_STATUS_NOT_START 未投放-未达投放时间PROJECT_STATUS_REACH_DAILY_DELIVERY 未投放-已达投放时长PROJECT_STATUS_NO_SCHEDULE 未投放-不在投放时段PROJECT_STATUS_PRODUCT_OFFLINE 未投放-商品不可投放AWEME_ACCOUNT_DISABLED未投放-关联抖音账号不可投放
     */
    public string $status_second;

}