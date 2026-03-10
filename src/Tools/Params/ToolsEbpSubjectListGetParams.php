<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsEbpSubjectListGetParams extends RequestParams
{

    /**
     * @var int $enterprise_organization_id 企业版工作台组织id
     */
    public int $enterprise_organization_id;

    /**
     * @var array<string> $query_types 主体类型 可选值: BP_OTHER：关联认证主体BP_OWN：认证主体
     */
    public array $query_types;

    /**
     * @var array<int> $filter_company_id 根据公司id筛选
     */
    public array $filter_company_id;

    /**
     * @var array<string> $filter_status 根据主体认证状态过滤，仅AVAILABLE代表当前主体为可使用状态，可选值: AVAILABLE：主体可用AVAILABLE_EVER：对公验证过期、资质认证过期、资质审核中或审核不通过UNAVALIABLE：主体不可用
     */
    public array $filter_status;

    /**
     * @var array<int> $filter_account_ids 关联主体id过滤
     */
    public array $filter_account_ids;

    /**
     * @var \AdOceanSdk\Tools\Data\ToolsEbpSubjectListGetParamPaginationData $pagination 每页最多50条
     */
    public \AdOceanSdk\Tools\Data\ToolsEbpSubjectListGetParamPaginationData $pagination;

}