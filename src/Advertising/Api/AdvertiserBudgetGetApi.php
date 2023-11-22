<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取账户日预算
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710531128335
 */
class AdvertiserBudgetGetApi extends RequestApi
{
    protected string $address = 'open_api/2/advertiser/budget/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Advertising\Params\AdvertiserBudgetGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\AdvertiserBudgetGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\AdvertiserBudgetGetResponse::from($response->toArray());
    }
}