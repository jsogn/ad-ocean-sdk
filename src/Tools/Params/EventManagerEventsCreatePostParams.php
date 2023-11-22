<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class EventManagerEventsCreatePostParams extends RequestParams
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
     * @var int $event_id 事件ID
     */
    public int $event_id;
    
    /**
     * @var array<string> $track_types 事件回传方式列表，允许值：JSSDKJS埋码 、EXTERNAL_APIAPI回传 、XPATHXPath圈选、APPLICATION_API应用API 、APPLICATION_SDK应用SDK 、QUICK_APP_API快应用API
     */
    public array $track_types;
    
}