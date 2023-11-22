<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 建议日预算及预期成本
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710676657164
 */
class ToolsBidSuggestGetApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/bid/suggest/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsBidSuggestGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsBidSuggestGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsBidSuggestGetResponse::from($response->toArray());
    }
}