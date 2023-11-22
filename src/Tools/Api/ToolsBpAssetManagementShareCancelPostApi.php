<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 取消微信小游戏/小程序共享关系
 * @doc  https://open.oceanengine.com/labels/7/docs/1773102677218368
 */
class ToolsBpAssetManagementShareCancelPostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/bp_asset_management/share/cancel/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\ToolsBpAssetManagementShareCancelPostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsBpAssetManagementShareCancelPostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsBpAssetManagementShareCancelPostResponse::from($response->toArray());
    }
}