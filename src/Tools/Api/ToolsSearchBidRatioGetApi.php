<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取快投推荐出价系数
 * @doc  https://open.oceanengine.com/labels/7/docs/1740289237468175
 */
class ToolsSearchBidRatioGetApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/search_bid_ratio/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsSearchBidRatioGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsSearchBidRatioGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsSearchBidRatioGetResponse::from($response->toArray());
    }
}