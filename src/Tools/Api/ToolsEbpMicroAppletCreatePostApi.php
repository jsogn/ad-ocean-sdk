<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 新建字节小程序
 * @doc  https://open.oceanengine.com/labels/7/docs/1847487532455299?origin=left_nav
 */
class ToolsEbpMicroAppletCreatePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/ebp/micro_applet/create/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\ToolsEbpMicroAppletCreatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsEbpMicroAppletCreatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsEbpMicroAppletCreatePostResponse::from($response->toArray());
    }
}