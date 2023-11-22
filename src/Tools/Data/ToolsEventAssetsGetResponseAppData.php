<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 应用数据
class ToolsEventAssetsGetResponseAppData extends Data
{

    /**
     * @var int $asset_id 应用资产ID
     */
    public int $asset_id;
    
    /**
     * @var string $app_name 应用名
     */
    public string $app_name;
    
    /**
     * @var string $app_type 应用类型
     */
    public string $app_type;
    
    /**
     * @var string $download_url 应用下载链接
     */
    public string $download_url;
    
    /**
     * @var int $app_id 应用ID
     */
    public int $app_id;
    
    /**
     * @var string $package_id 母包ID
     */
    public string $package_id;
    
    /**
     * @var string $package_name 应用包名
     */
    public string $package_name;
    
    /**
     * @var string $role 资产来源。枚举值：MINE自己创建的、SHARED共享资产
     */
    public string $role;
    
    /**
     * @var string $asset_name 资产名
     */
    public string $asset_name;
    
}