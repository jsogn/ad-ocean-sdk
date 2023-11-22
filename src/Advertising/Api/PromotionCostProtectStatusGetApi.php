<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 批量获取广告成本保障状态
 * @doc  https://open.oceanengine.com/labels/7/docs/1755355980850191
 */
class PromotionCostProtectStatusGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/promotion/cost_protect_status/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Advertising\Params\PromotionCostProtectStatusGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\PromotionCostProtectStatusGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\PromotionCostProtectStatusGetResponse::from($response->toArray());
    }
}