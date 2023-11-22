<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取微信小程序列表
 * @doc  https://open.oceanengine.com/labels/7/docs/1771203622020111
 */
class ToolsWechatAppletListGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/wechat_applet/list/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsWechatAppletListGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsWechatAppletListGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsWechatAppletListGetResponse::from($response->toArray());
    }
}