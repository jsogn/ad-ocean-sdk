<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 更新账户日预算
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710531631116
 */
class AdvertiserBudgetUpdatePostApi extends RequestApi
{
    protected string $address = 'open_api/2/advertiser/update/budget/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Advertising\Params\AdvertiserBudgetUpdatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\AdvertiserBudgetUpdatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\AdvertiserBudgetUpdatePostResponse::from($response->toArray());
    }
}