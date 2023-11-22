<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class EventManagerTrackUrlGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var int $asset_id 资产ID
     */
    public int $asset_id;
    
    /**
     * @var string $download_url 应用下载链接，当传入download_url返回该下载链接下的监测链接组；当不传入download_url只传入asset_id时，返回所有应用下载链接下的监测链接组
     */
    public string $download_url;
    
    /**
     * @var string $track_url_group_name 监测链接组名称
     */
    public string $track_url_group_name;
    
    /**
     * @var int $track_url_group_id 监测链接组ID
     */
    public int $track_url_group_id;
    
    /**
     * @var int $page 页码
     */
    public int $page;
    
    /**
     * @var int $page_size 分页个数
     */
    public int $page_size;
    
}