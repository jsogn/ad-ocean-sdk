<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 资质认证及对公信息
class ToolsEbpSubjectListGetResponseCompanyBasicInfosQualificationInfoData extends Data
{

    /**
     * @var int $query_type 
     */
    public int $query_type;

    /**
     * @var \AdOceanSdk\Tools\Data\ToolsEbpSubjectListGetResponseCompanyBasicInfosQualificationInfoSubjectQualificationData $subject_qualification 资质认证信息
     */
    public \AdOceanSdk\Tools\Data\ToolsEbpSubjectListGetResponseCompanyBasicInfosQualificationInfoSubjectQualificationData $subject_qualification;

    /**
     * @var \AdOceanSdk\Tools\Data\ToolsEbpSubjectListGetResponseCompanyBasicInfosQualificationInfoVerifyInfoDtoData $verify_info_dto 主体对公信息
     */
    public \AdOceanSdk\Tools\Data\ToolsEbpSubjectListGetResponseCompanyBasicInfosQualificationInfoVerifyInfoDtoData $verify_info_dto;

}