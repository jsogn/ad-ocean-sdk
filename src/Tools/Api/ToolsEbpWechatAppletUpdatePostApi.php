<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 更新微信小程序
 * @doc  https://open.oceanengine.com/labels/7/docs/1847487757321420?origin=left_nav
 */
class ToolsEbpWechatAppletUpdatePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/ebp/wechat_applet/update/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\ToolsEbpWechatAppletUpdatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsEbpWechatAppletUpdatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsEbpWechatAppletUpdatePostResponse::from($response->toArray());
    }
}