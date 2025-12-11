<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ToolsBpAssetManagementSharePostResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsBpAssetManagementSharePostResponseErrorListData> $error_list 共享失败列表，列表为空则代表全部共享成功
     */
    public array $error_list;
    
}