<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 升级版工作台素材共享
 * @doc  https://open.oceanengine.com/labels/7/docs/1854120947746880?origin=left_nav
 */
class ToolsEbpMaterialAuthCreatePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/ebp/material/auth/create/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\ToolsEbpMaterialAuthCreatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsEbpMaterialAuthCreatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsEbpMaterialAuthCreatePostResponse::from($response->toArray());
    }
}