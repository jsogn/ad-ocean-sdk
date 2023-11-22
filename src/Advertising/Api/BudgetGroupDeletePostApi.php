<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 批量删除预算组
 * @doc  https://open.oceanengine.com/labels/7/docs/1780643886635008
 */
class BudgetGroupDeletePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/budget_group/delete/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Advertising\Params\BudgetGroupDeletePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\BudgetGroupDeletePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\BudgetGroupDeletePostResponse::from($response->toArray());
    }
}