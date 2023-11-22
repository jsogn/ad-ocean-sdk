<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 资产下创建事件
 * @doc  https://open.oceanengine.com/labels/7/docs/1709792900524035
 */
class EventManagerEventsCreatePostApi extends RequestApi
{
    protected string $address = 'open_api/2/event_manager/events/create/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\EventManagerEventsCreatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\EventManagerEventsCreatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\EventManagerEventsCreatePostResponse::from($response->toArray());
    }
}