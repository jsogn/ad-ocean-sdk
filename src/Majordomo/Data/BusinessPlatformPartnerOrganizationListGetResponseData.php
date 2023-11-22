<?php

declare(strict_types=1);

namespace AdOceanSdk\Majordomo\Data;

use AdOceanSdk\Kernel\Data\Data;

class BusinessPlatformPartnerOrganizationListGetResponseData extends Data
{
    /**
     * @var array<\AdOceanSdk\Majordomo\Data\BusinessPlatformPartnerOrganizationListGetResponseListData> $list 应用列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Majordomo\Data\BusinessPlatformPartnerOrganizationListGetResponseListData::class)]
    public array $list;

    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;

}