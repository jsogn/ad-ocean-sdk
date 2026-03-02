<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 升级版工作台取消素材共享
 * @doc  https://open.oceanengine.com/labels/7/docs/1855452458903624?origin=left_nav
 */
class ToolsEbpMaterialAuthDeletePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/ebp/material/auth/delete/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\ToolsEbpMaterialAuthDeletePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsEbpMaterialAuthDeletePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsEbpMaterialAuthDeletePostResponse::from($response->toArray());
    }
}