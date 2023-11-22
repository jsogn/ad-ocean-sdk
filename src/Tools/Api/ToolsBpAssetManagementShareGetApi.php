<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 查看微信小游戏/小程序共享范围
 * @doc  https://open.oceanengine.com/labels/7/docs/1773105971421187
 */
class ToolsBpAssetManagementShareGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/bp_asset_management/share/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsBpAssetManagementShareGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsBpAssetManagementShareGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsBpAssetManagementShareGetResponse::from($response->toArray());
    }
}