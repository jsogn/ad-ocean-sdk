<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 查询国家/区域信息
 * @doc  https://open.oceanengine.com/labels/7/docs/1709606374050823
 */
class ToolsCountryInfoGetApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/country/info/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsCountryInfoGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsCountryInfoGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsCountryInfoGetResponse::from($response->toArray());
    }
}