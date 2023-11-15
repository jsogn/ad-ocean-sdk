<?php

declare(strict_types=1);

namespace AdOceanSdk\Oauth\Data;

use AdOceanSdk\Kernel\Data\Data;

// 代理商账户下勾选账户，但授权时选择的是代理商类型账户时，该字段才有意义company_list为空时，代表当前代理商账户下所有adv均可访问；不为空时，代表仅能访问该部分客户id下的adv
class AdvertiserGetResponseListCompanyListData extends Data
{

    /**
     * @var int $customer_company_id 客户公司id
     */
    public int $customer_company_id;
    
    /**
     * @var string $customer_company_name 客户公司名
     */
    public string $customer_company_name;
    
}