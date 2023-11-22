<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 查询建议出价（巨量广告升级版）
 * @doc  https://open.oceanengine.com/labels/7/docs/1771363823169544
 */
class ToolsBidsSuggestGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/bids/suggest/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsBidsSuggestGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsBidsSuggestGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsBidsSuggestGetResponse::from($response->toArray());
    }
}