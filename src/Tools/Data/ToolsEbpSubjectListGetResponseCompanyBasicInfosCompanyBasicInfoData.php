<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 主体基本信息
class ToolsEbpSubjectListGetResponseCompanyBasicInfosCompanyBasicInfoData extends Data
{

    /**
     * @var string $status 主体填写状态 可选值: COMPANY_EXIST 主体在当前组织下已经存在COMPANY_OCCUPIED 主体被其他组织占用SUCCESS 成功UNKOWN 未开始
     */
    public string $status;

    /**
     * @var string $company_name 主体名称
     */
    public string $company_name;

    /**
     * @var int $check_type 主体验证类型
     */
    public int $check_type;

    /**
     * @var int $qualification_type 资质类型
     */
    public int $qualification_type;

    /**
     * @var string $qualification_serial 资质编号
     */
    public string $qualification_serial;

    /**
     * @var int $company_id 公司主体id
     */
    public int $company_id;

}