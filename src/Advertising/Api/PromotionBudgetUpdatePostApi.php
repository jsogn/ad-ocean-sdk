<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 批量更新广告预算
 * @doc  https://open.oceanengine.com/labels/7/docs/1741030872454148
 */
class PromotionBudgetUpdatePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/promotion/budget/update/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Advertising\Params\PromotionBudgetUpdatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\PromotionBudgetUpdatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\PromotionBudgetUpdatePostResponse::from($response->toArray());
    }
}