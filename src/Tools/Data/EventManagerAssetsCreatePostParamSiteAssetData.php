<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 橙子落地页信息
class EventManagerAssetsCreatePostParamSiteAssetData extends Data
{

    /**
     * @var int $site_id 橙子建站站点ID，橙子落地页必填
     */
    public int $site_id;
    
    /**
     * @var string $site_name 橙子建站站点名称，橙子落地页必填
     */
    public string $site_name;
    
}