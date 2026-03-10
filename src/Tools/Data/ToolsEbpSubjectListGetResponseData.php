<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ToolsEbpSubjectListGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsEbpSubjectListGetResponseCompanyBasicInfosData> $company_basic_infos 主体信息列表
     */
    public array $company_basic_infos;

    /**
     * @var \AdOceanSdk\Tools\Data\ToolsEbpSubjectListGetResponsePaginationData $pagination 分页信息
     */
    public \AdOceanSdk\Tools\Data\ToolsEbpSubjectListGetResponsePaginationData $pagination;

}