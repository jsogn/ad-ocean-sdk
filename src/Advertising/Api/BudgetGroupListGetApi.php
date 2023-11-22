<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取预算组列表
 * @doc  https://open.oceanengine.com/labels/7/docs/1780644067911818
 */
class BudgetGroupListGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/budget_group/list/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Advertising\Params\BudgetGroupListGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\BudgetGroupListGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\BudgetGroupListGetResponse::from($response->toArray());
    }
}