<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 添加资产共享
 * @doc  https://open.oceanengine.com/labels/7/docs/1848327327721671?origin=left_nav
 */
class ToolsEbpAssetAuthPostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/ebp/asset/auth/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\ToolsEbpAssetAuthPostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsEbpAssetAuthPostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsEbpAssetAuthPostResponse::from($response->toArray());
    }
}