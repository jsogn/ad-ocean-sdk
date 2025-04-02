<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取活动记录
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710632392704
 */
class ToolsKeyActionGetApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/key_action/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsKeyActionGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsKeyActionGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsKeyActionGetResponse::from($response->toArray());
    }
}