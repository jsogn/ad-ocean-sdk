<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// ebp 或虚拟认证主体Id
class ToolsEbpSubjectListGetResponseCompanyBasicInfosAccountParamData extends Data
{

    /**
     * @var int $account_type 账户类型
     */
    public int $account_type;

    /**
     * @var int $account_id 账户id，如果为认证主体，则为升级版工作台组织id；如果为关联认证主体，则为特殊指定id
     */
    public int $account_id;

}