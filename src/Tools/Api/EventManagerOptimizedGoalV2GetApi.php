<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取可用优化目标（巨量广告升级版）
 * @doc  https://open.oceanengine.com/labels/7/docs/1740944984250381
 */
class EventManagerOptimizedGoalV2GetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/event_manager/optimized_goal/get_v2/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\EventManagerOptimizedGoalV2GetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\EventManagerOptimizedGoalV2GetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\EventManagerOptimizedGoalV2GetResponse::from($response->toArray());
    }
}