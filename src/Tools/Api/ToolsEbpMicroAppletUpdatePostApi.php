<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 更新字节小程序
 * @doc  https://open.oceanengine.com/labels/7/docs/1847487541689347?origin=left_nav
 */
class ToolsEbpMicroAppletUpdatePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/ebp/micro_applet/update/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\ToolsEbpMicroAppletUpdatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsEbpMicroAppletUpdatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsEbpMicroAppletUpdatePostResponse::from($response->toArray());
    }
}