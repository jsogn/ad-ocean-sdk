<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 主体信息列表
class ToolsEbpSubjectListGetResponseCompanyBasicInfosData extends Data
{

    /**
     * @var int $group_id 一级组织id
     */
    public int $group_id;

    /**
     * @var \AdOceanSdk\Tools\Data\ToolsEbpSubjectListGetResponseCompanyBasicInfosAccountParamData $account_param ebp 或虚拟认证主体Id
     */
    public \AdOceanSdk\Tools\Data\ToolsEbpSubjectListGetResponseCompanyBasicInfosAccountParamData $account_param;

    /**
     * @var string $status 组织主体可用状态 可选值: AVAILABLE 主体可用AVAILABLE_EVER 对公验证过期、资质认证过期、资质审核中或审核不通过UNAVALIABLE 主体不可用
     */
    public string $status;

    /**
     * @var int $qualification_type 主体类型，枚举：
     */
    public int $qualification_type;

    /**
     * @var \AdOceanSdk\Tools\Data\ToolsEbpSubjectListGetResponseCompanyBasicInfosCompanyBasicInfoData $company_basic_info 主体基本信息
     */
    public \AdOceanSdk\Tools\Data\ToolsEbpSubjectListGetResponseCompanyBasicInfosCompanyBasicInfoData $company_basic_info;

    /**
     * @var \AdOceanSdk\Tools\Data\ToolsEbpSubjectListGetResponseCompanyBasicInfosQualificationInfoData $qualification_info 资质认证及对公信息
     */
    public \AdOceanSdk\Tools\Data\ToolsEbpSubjectListGetResponseCompanyBasicInfosQualificationInfoData $qualification_info;

}