<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 创建预算组
 * @doc  https://open.oceanengine.com/labels/7/docs/1780159359081540
 */
class BudgetGroupCreatePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/budget_group/create/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Advertising\Params\BudgetGroupCreatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\BudgetGroupCreatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\BudgetGroupCreatePostResponse::from($response->toArray());
    }
}