<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 事件管理资产取消共享
 * @doc  https://open.oceanengine.com/labels/7/docs/1738862469146628
 */
class EventManagerShareCancelPostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/event_manager/share/cancel/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\EventManagerShareCancelPostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\EventManagerShareCancelPostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\EventManagerShareCancelPostResponse::from($response->toArray());
    }
}