<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 升级版工作台查询素材共享范围
 * @doc  https://open.oceanengine.com/labels/7/docs/1855451294366919?origin=left_nav
 */
class ToolsEbpMaterialAuthListGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/ebp/material/auth/list/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsEbpMaterialAuthListGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsEbpMaterialAuthListGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsEbpMaterialAuthListGetResponse::from($response->toArray());
    }
}