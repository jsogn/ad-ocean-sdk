<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ToolsBpAssetManagementShareCancelPostResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsBpAssetManagementShareCancelPostResponseErrorListData> $error_list 取消共享失败的账号列表，该字段为空则代表全部取消成功
     */
    public array $error_list;
    
}