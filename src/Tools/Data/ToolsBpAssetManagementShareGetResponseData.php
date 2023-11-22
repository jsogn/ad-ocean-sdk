<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ToolsBpAssetManagementShareGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsBpAssetManagementShareGetResponseSharedAccountsData> $sharedAccounts 共享账号列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\ToolsBpAssetManagementShareGetResponseSharedAccountsData::class)]
    public array $sharedAccounts;
    
    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;
    
}