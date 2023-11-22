<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取资产下已创建事件列表
 * @doc  https://open.oceanengine.com/labels/7/docs/1709793086075972
 */
class EventManagerEventConfigsGetApi extends RequestApi
{
    protected string $address = 'open_api/2/event_manager/event_configs/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\EventManagerEventConfigsGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\EventManagerEventConfigsGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\EventManagerEventConfigsGetResponse::from($response->toArray());
    }
}