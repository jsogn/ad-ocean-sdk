<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 批量更新广告投放时段
 * @doc  https://open.oceanengine.com/labels/7/docs/1769912402184199
 */
class PromotionScheduleTimeUpdatePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/promotion/schedule_time/update/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Advertising\Params\PromotionScheduleTimeUpdatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\PromotionScheduleTimeUpdatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\PromotionScheduleTimeUpdatePostResponse::from($response->toArray());
    }
}