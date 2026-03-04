<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 取消资产共享
 * @doc  https://open.oceanengine.com/labels/7/docs/1848328204842138?origin=left_nav
 */
class ToolsEbpAssetAuthCancelPostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/ebp/asset/auth/cancel/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\ToolsEbpAssetAuthCancelPostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsEbpAssetAuthCancelPostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsEbpAssetAuthCancelPostResponse::from($response->toArray());
    }
}