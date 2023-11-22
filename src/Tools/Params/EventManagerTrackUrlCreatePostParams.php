<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class EventManagerTrackUrlCreatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var int $assets_id 资产ID
     */
    public int $assets_id;
    
    /**
     * @var string $download_url 应用下载链接，应用下载链接，IOS和安卓应用资产：必填
     */
    public string $download_url;
    
    /**
     * @var array $track_url_groups 监测链接组信息，IOS和安卓应用可绑定多组监测链接
     */
    public array $track_url_groups;
    
    /**
     * @var \AdOceanSdk\Tools\Data\EventManagerTrackUrlCreatePostParamActionTrackUrlData $action_track_url 点击（监测链接），只允许传入1个
     */
    public \AdOceanSdk\Tools\Data\EventManagerTrackUrlCreatePostParamActionTrackUrlData $action_track_url;
    
}