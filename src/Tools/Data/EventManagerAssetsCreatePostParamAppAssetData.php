<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 应用信息
class EventManagerAssetsCreatePostParamAppAssetData extends Data
{

    /**
     * @var string $name 应用名称，长度限制为125，一个字符长度为1，IOS、Android应用必填
     */
    public string $name;
    
    /**
     * @var string $package_name 应用包名，长度限制为140，IOS、Android应用必填
     */
    public string $package_name;
    
    /**
     * @var string $download_url 应用下载链接，IOS、Android应用必填
     */
    public string $download_url;
    
    /**
     * @var int $app_id 应用ID，Android应用必填
     */
    public int $app_id;
    
    /**
     * @var string $package_id 母包ID，Android应用必填
     */
    public string $package_id;
    
    /**
     * @var string $app_type 应用类型，允许值：IOS、Android
     */
    public string $app_type;
    
}