<?php

declare(strict_types=1);

namespace AdOceanSdk\Majordomo\Data;

use AdOceanSdk\Kernel\Data\Data;

// 主体信息列表
class BusinessPlatformCompanyInfoGetResponseCompanyInfoData extends Data
{

    /**
     * @var int $company_id 公司主体ID
     */
    public int $company_id;
    
    /**
     * @var string $company_name 公司主体名
     */
    public string $company_name;
    
    /**
     * @var string $type 公司关系，可选值：BP_OTHER 其他主体、BP_OWN我的主体
     */
    public string $type;
    
    /**
     * @var string $status 公司主体状态，枚举值：
     */
    public string $status;
    
}