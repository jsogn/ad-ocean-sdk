<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class EventManagerTrackUrlUpdatePostParams extends RequestParams
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
     * @var object $track_url_group 监测链接组信息
     */
    public object $track_url_group;
    
    /**
     * @var string $track_url_group_name 监测链接组名称 应用资产必填
     */
    public string $track_url_group_name;
    
    /**
     * @var \AdOceanSdk\Tools\Data\EventManagerTrackUrlUpdatePostParamTrackUrlGroupIdData $track_url_group_id 监测链接组ID
     */
    public \AdOceanSdk\Tools\Data\EventManagerTrackUrlUpdatePostParamTrackUrlGroupIdData $track_url_group_id;
    
}