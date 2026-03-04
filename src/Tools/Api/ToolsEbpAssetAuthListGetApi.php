<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 查询资产共享范围
 * @doc  https://open.oceanengine.com/labels/7/docs/1848326390305163?origin=left_nav
 */
class ToolsEbpAssetAuthListGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/ebp/asset/auth/list/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsEbpAssetAuthListGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsEbpAssetAuthListGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsEbpAssetAuthListGetResponse::from($response->toArray());
    }
}