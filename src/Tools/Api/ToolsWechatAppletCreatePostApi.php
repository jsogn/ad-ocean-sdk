<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 创建微信小程序
 * @doc  https://open.oceanengine.com/labels/7/docs/1771744149686286
 */
class ToolsWechatAppletCreatePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/wechat_applet/create/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\ToolsWechatAppletCreatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsWechatAppletCreatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsWechatAppletCreatePostResponse::from($response->toArray());
    }
}