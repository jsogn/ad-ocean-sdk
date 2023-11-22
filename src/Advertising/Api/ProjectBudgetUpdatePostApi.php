<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 批量更新项目预算
 * @doc  https://open.oceanengine.com/labels/7/docs/1755353873798155
 */
class ProjectBudgetUpdatePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/project/budget/update/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Advertising\Params\ProjectBudgetUpdatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\ProjectBudgetUpdatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\ProjectBudgetUpdatePostResponse::from($response->toArray());
    }
}