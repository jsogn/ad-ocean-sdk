<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 创建事件资产
 * @doc  https://open.oceanengine.com/labels/7/docs/1709792943937547
 */
class EventManagerAssetsCreatePostApi extends RequestApi
{
    protected string $address = 'open_api/2/event_manager/assets/create/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\EventManagerAssetsCreatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\EventManagerAssetsCreatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\EventManagerAssetsCreatePostResponse::from($response->toArray());
    }
}