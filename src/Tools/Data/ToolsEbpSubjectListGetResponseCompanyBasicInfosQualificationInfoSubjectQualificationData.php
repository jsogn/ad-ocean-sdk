<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 资质认证信息
class ToolsEbpSubjectListGetResponseCompanyBasicInfosQualificationInfoSubjectQualificationData extends Data
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
     * @var string $company_name 公司名称
     */
    public string $company_name;

    /**
     * @var int $company_type 主体类型
1=企业 ， 2=个人
     */
    public int $company_type;

    /**
     * @var int $qualification_type 资质类型
     */
    public int $qualification_type;

    /**
     * @var string $qualification_serial 资质编号
     */
    public string $qualification_serial;

    /**
     * @var int $status 主体资质认证状态，枚举：
     */
    public int $status;

    /**
     * @var int $company_id 公司ID
     */
    public int $company_id;

    /**
     * @var string $expire_time 到期时间
     */
    public string $expire_time;

    /**
     * @var int $check_type 验证类型
     */
    public int $check_type;

}