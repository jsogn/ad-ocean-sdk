<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取线索列表
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710631271436
 */
class ToolsClueGetApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/clue/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsClueGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsClueGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsClueGetResponse::from($response->toArray());
    }
}