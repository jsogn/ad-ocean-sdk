<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取字节小程序/小游戏详情内容
 * @doc  https://open.oceanengine.com/labels/7/docs/1778265753535620
 */
class ToolsAssetLinkListGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/asset_link/list/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsAssetLinkListGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsAssetLinkListGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsAssetLinkListGetResponse::from($response->toArray());
    }
}