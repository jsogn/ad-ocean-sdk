<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取微信小程序列表
 * @doc  https://open.oceanengine.com/labels/7/docs/1847487716271104?origin=left_nav
 */
class ToolsEbpWechatAppletListGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/ebp/wechat_applet/list/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsEbpWechatAppletListGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsEbpWechatAppletListGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsEbpWechatAppletListGetResponse::from($response->toArray());
    }
}