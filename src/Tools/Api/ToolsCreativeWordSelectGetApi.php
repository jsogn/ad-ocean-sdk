<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 查询动态创意词包
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710718137356
 */
class ToolsCreativeWordSelectGetApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/creative_word/select/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsCreativeWordSelectGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsCreativeWordSelectGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsCreativeWordSelectGetResponse::from($response->toArray());
    }
}