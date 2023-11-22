<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 查询广告质量度
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710677262351
 */
class ToolsAdQualityGetApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/ad_quality/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsAdQualityGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsAdQualityGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsAdQualityGetResponse::from($response->toArray());
    }
}