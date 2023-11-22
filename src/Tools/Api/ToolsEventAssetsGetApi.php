<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取已创建资产列表
 * @doc  https://open.oceanengine.com/labels/7/docs/1705976384784395
 */
class ToolsEventAssetsGetApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/event/assets/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsEventAssetsGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsEventAssetsGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsEventAssetsGetResponse::from($response->toArray());
    }
}