<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 查询受众预估结果
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710675422208
 */
class ToolsEstimateAudienceGetApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/estimate_audience/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsEstimateAudienceGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsEstimateAudienceGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsEstimateAudienceGetResponse::from($response->toArray());
    }
}