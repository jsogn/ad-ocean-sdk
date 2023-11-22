<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 快应用资产信息
class EventManagerAssetsCreatePostParamQuickAppAssetData extends Data
{

    /**
     * @var string $name 快应用名称，长度限制为20，一个字符长度为1
     */
    public string $name;
    
    /**
     * @var string $package_name 快应用包名，长度限制为140
     */
    public string $package_name;
    
}