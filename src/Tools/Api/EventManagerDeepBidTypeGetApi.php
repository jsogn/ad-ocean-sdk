<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取可用深度优化方式（广告投放升级版）
 * @doc  https://open.oceanengine.com/labels/7/docs/1754875889727563
 */
class EventManagerDeepBidTypeGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/event_manager/deep_bid_type/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\EventManagerDeepBidTypeGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\EventManagerDeepBidTypeGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\EventManagerDeepBidTypeGetResponse::from($response->toArray());
    }
}