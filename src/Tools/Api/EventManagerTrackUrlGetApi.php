<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取事件资产下的监测链接组
 * @doc  https://open.oceanengine.com/labels/7/docs/1727901957092365
 */
class EventManagerTrackUrlGetApi extends RequestApi
{
    protected string $address = 'open_api/2/event_manager/track_url/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\EventManagerTrackUrlGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\EventManagerTrackUrlGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\EventManagerTrackUrlGetResponse::from($response->toArray());
    }
}