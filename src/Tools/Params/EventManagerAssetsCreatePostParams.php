<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class EventManagerAssetsCreatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var string $asset_type 资产类型，允许值：TETRIS_EXTERNAL建站落地页、THIRD_EXTERNAL三方落地页、APP应用、QUICK_APP快应用、落地页、MINI_PROGRAM字节小程序
     */
    public string $asset_type;
    
    /**
     * @var \AdOceanSdk\Tools\Data\EventManagerAssetsCreatePostParamThirdPartAsset选填Data $third_part_asset选填 三方落地页资产信息
     */
    public \AdOceanSdk\Tools\Data\EventManagerAssetsCreatePostParamThirdPartAsset选填Data $third_part_asset选填;
    
    /**
     * @var \AdOceanSdk\Tools\Data\EventManagerAssetsCreatePostParamQuickAppAssetData $quick_app_asset 快应用资产信息
     */
    public \AdOceanSdk\Tools\Data\EventManagerAssetsCreatePostParamQuickAppAssetData $quick_app_asset;
    
    /**
     * @var \AdOceanSdk\Tools\Data\EventManagerAssetsCreatePostParamAppAssetData $app_asset 应用信息
     */
    public \AdOceanSdk\Tools\Data\EventManagerAssetsCreatePostParamAppAssetData $app_asset;
    
    /**
     * @var \AdOceanSdk\Tools\Data\EventManagerAssetsCreatePostParamSiteAssetData $site_asset 橙子落地页信息
     */
    public \AdOceanSdk\Tools\Data\EventManagerAssetsCreatePostParamSiteAssetData $site_asset;
    
    /**
     * @var \AdOceanSdk\Tools\Data\EventManagerAssetsCreatePostParamMiniProgramAssetData $mini_program_asset 字节小程序资产信息
     */
    public \AdOceanSdk\Tools\Data\EventManagerAssetsCreatePostParamMiniProgramAssetData $mini_program_asset;
    
}