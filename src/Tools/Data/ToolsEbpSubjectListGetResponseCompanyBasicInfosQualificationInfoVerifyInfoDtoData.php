<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 主体对公信息
class ToolsEbpSubjectListGetResponseCompanyBasicInfosQualificationInfoVerifyInfoDtoData extends Data
{

    /**
     * @var int $account_id 账户ID
     */
    public int $account_id;

    /**
     * @var int $platform 平台号
BP = 51 ，星图=3 ， AD=0，千川80
     */
    public int $platform;

    /**
     * @var int $verify_check_type 对公验证类型
     */
    public int $verify_check_type;

    /**
     * @var int $verify_status 对公验证状态，枚举：
     */
    public int $verify_status;

    /**
     * @var string $verify_expire_time 对公验证有效截止时间
     */
    public string $verify_expire_time;

}