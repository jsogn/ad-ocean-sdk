<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 设置微信小游戏/小程序共享
 * @doc  https://open.oceanengine.com/labels/7/docs/1773089427219584
 */
class ToolsBpAssetManagementSharePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/bp_asset_management/share/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\ToolsBpAssetManagementSharePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsBpAssetManagementSharePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsBpAssetManagementSharePostResponse::from($response->toArray());
    }
}