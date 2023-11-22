<?php

declare(strict_types=1);

namespace AdOceanSdk\Majordomo\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class BusinessPlatformCompanyInfoGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Majordomo\Data\BusinessPlatformCompanyInfoGetResponseCompanyInfoData> $company_info 主体信息列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Majordomo\Data\BusinessPlatformCompanyInfoGetResponseCompanyInfoData::class)]
    public array $company_info;

    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;

}