<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 资产列表
class ToolsEventAllAssetsDetailGetResponseAssetListData extends Data
{

    /**
     * @var int $asset_id 资产id，不会返回已删除资产
     */
    public int $asset_id;
    
    /**
     * @var string $asset_name 资产名称，不会返回已删除资产
     */
    public string $asset_name;
    
    /**
     * @var string $asset_type 资产类型，枚举值:
     */
    public string $asset_type;
    
    /**
     * @var int $site_id 橙子落地页站点id，当asset_type = TETRIS_EXTERNAL 时返回，表示该资产是基于哪一个橙子落地页站点创建的，在巨量广告-事件资产页面，橙子落地页显示为该站点id
     */
    public int $site_id;
    
    /**
     * @var string $app_type 应用类型，当asset_type = APP 时返回，枚举值：
     */
    public string $app_type;
    
    /**
     * @var int $app_id 应用ID，当asset_type = APP 时返回
     */
    public int $app_id;
    
    /**
     * @var string $app_name 应用名称，当asset_type = APP 时返回
     */
    public string $app_name;
    
    /**
     * @var string $package_id 应用包id，当asset_type = APP 时返回，当调用API创建资产时，Android应用必填，建议获取保存
     */
    public string $package_id;
    
    /**
     * @var string $package_name 应用包名，当asset_type = APP 时返回
     */
    public string $package_name;
    
    /**
     * @var string $download_url 应用下载链接，当asset_type = APP 时返回
     */
    public string $download_url;
    
    /**
     * @var int $quick_app_id 快应用id，当asset_type = QUICK_APP 时返回
     */
    public int $quick_app_id;
    
    /**
     * @var string $quick_app_package_name 快应用包名，当asset_type = QUICK_APP 时返回
     */
    public string $quick_app_package_name;
    
    /**
     * @var string $micro_app_id 小程序appid，当asset_type = MINI_PROGRAME 时返回
     */
    public string $micro_app_id;
    
    /**
     * @var int $micro_app_instance_id 小程序资产id，当asset_type = MINI_PROGRAME 时返回
     */
    public int $micro_app_instance_id;
    
}