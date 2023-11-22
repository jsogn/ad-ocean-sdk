<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取可创建事件列表
 * @doc  https://open.oceanengine.com/labels/7/docs/1709793059412996
 */
class EventManagerAvailableEventsGetApi extends RequestApi
{
    protected string $address = 'open_api/2/event_manager/available_events/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\EventManagerAvailableEventsGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\EventManagerAvailableEventsGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\EventManagerAvailableEventsGetResponse::from($response->toArray());
    }
}