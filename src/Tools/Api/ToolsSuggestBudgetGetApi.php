<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取广告建议起量预算
 * @doc  https://open.oceanengine.com/labels/7/docs/1761603631358979
 */
class ToolsSuggestBudgetGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/suggest_budget/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsSuggestBudgetGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsSuggestBudgetGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsSuggestBudgetGetResponse::from($response->toArray());
    }
}