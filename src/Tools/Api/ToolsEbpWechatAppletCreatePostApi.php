<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 新建微信小程序
 * @doc  https://open.oceanengine.com/labels/7/docs/1847487724040192?origin=left_nav
 */
class ToolsEbpWechatAppletCreatePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/ebp/wechat_applet/create/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\ToolsEbpWechatAppletCreatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsEbpWechatAppletCreatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsEbpWechatAppletCreatePostResponse::from($response->toArray());
    }
}