<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 事件管理资产共享
 * @doc  https://open.oceanengine.com/labels/7/docs/1738862409262084
 */
class EventManagerSharePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/event_manager/share/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\EventManagerSharePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\EventManagerSharePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\EventManagerSharePostResponse::from($response->toArray());
    }
}