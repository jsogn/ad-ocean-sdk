<?php

declare(strict_types=1);

namespace AdOceanSdk\Majordomo\Params;

use AdOceanSdk\RequestParams;

class BusinessPlatformPartnerOrganizationListGetParams extends RequestParams
{

    /**
     * @var int $organization_id 巨量纵横组织id（即管家账户）
     */
    public int $organization_id;
    
    /**
     * @var int $page 页码，默认值为1
     */
    public int $page;
    
    /**
     * @var int $page_size 页面大小，默认值为10，最大不超过200
     */
    public int $page_size;
    
    /**
     * @var \AdOceanSdk\Majordomo\Data\BusinessPlatformPartnerOrganizationListGetParamFilteringData $filtering 过滤条件
     */
    public \AdOceanSdk\Majordomo\Data\BusinessPlatformPartnerOrganizationListGetParamFilteringData $filtering;
    
}