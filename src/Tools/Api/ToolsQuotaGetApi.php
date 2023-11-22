<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 查询在投计划配额
 * @doc  https://open.oceanengine.com/labels/7/docs/1731070251873293
 */
class ToolsQuotaGetApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/quota/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsQuotaGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsQuotaGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsQuotaGetResponse::from($response->toArray());
    }
}