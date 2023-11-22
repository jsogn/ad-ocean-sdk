<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取橙子建站站点详细信息
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710620022799
 */
class ToolsSiteReadGetApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/site/read/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsSiteReadGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsSiteReadGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsSiteReadGetResponse::from($response->toArray());
    }
}