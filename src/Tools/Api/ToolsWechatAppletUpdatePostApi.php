<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 更新微信小程序
 * @doc  https://open.oceanengine.com/labels/7/docs/1771744756803659
 */
class ToolsWechatAppletUpdatePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/wechat_applet/update/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\ToolsWechatAppletUpdatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsWechatAppletUpdatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsWechatAppletUpdatePostResponse::from($response->toArray());
    }
}