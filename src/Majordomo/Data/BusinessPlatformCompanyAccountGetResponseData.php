<?php

declare(strict_types=1);

namespace AdOceanSdk\Majordomo\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class BusinessPlatformCompanyAccountGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Majordomo\Data\BusinessPlatformCompanyAccountGetResponseAccountListData> $account_list 账户列表
     */
    public array $account_list;

    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;

}