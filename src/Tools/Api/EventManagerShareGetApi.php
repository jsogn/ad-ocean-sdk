<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 事件管理资产查看共享范围
 * @doc  https://open.oceanengine.com/labels/7/docs/1738862504734731
 */
class EventManagerShareGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/event_manager/share/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\EventManagerShareGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\EventManagerShareGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\EventManagerShareGetResponse::from($response->toArray());
    }
}