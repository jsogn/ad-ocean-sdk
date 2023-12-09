<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestFormatEnum;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取行政信息
 * @doc  https://open.oceanengine.com/labels/7/docs/1709606596424718
 */
class ToolsAdminInfoGetApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/admin/info/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    protected ?RequestFormatEnum $requestFormat = RequestFormatEnum::QUERY;

    public function call(\AdOceanSdk\Tools\Params\ToolsAdminInfoGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsAdminInfoGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsAdminInfoGetResponse::from($response->toArray());
    }
}