<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// 广告主列表
class AdvertiserPublicInfoGetResponseData extends Data
{

    /**
     * @var int $id 账户ID
     */
    public int $id;
    
    /**
     * @var string $name 账户名
     */
    public string $name;
    
    /**
     * @var string $company 公司名
     */
    public string $company;
    
    /**
     * @var string $first_industry_name 一级行业名
     */
    public string $first_industry_name;
    
    /**
     * @var string $second_industry_name 二级行业名
     */
    public string $second_industry_name;
    
}