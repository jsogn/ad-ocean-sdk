<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取抖音授权关系
 * @doc  https://open.oceanengine.com/labels/7/docs/1729983667746823
 */
class ToolsAwemeAuthListGetApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/aweme_auth_list/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsAwemeAuthListGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsAwemeAuthListGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsAwemeAuthListGetResponse::from($response->toArray());
    }
}