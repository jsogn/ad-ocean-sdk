<?php

declare(strict_types=1);

namespace AdOceanSdk\Majordomo\Params;

use AdOceanSdk\RequestParams;

class BusinessPlatformCompanyAccountGetParams extends RequestParams
{

    /**
     * @var int $organization_id 纵横组织ID
     */
    public int $organization_id;
    
    /**
     * @var int $company_id 公司主体ID
     */
    public int $company_id;
    
    /**
     * @var array<string> $account_type 账户类型，允许值：AD 巨量广告账户、QIANCHUAN 千川广告账户
     */
    public array $account_type;
    
    /**
     * @var int $page 页码，默认值：1
     */
    public int $page;
    
    /**
     * @var int $page_size 页面数据量，默认值：10
     */
    public int $page_size;
    
}