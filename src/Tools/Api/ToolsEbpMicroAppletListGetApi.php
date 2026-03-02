<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取字节小程序列表
 * @doc  https://open.oceanengine.com/labels/7/docs/1847487562418308?origin=left_nav
 */
class ToolsEbpMicroAppletListGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/ebp/micro_applet/list/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsEbpMicroAppletListGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsEbpMicroAppletListGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsEbpMicroAppletListGetResponse::from($response->toArray());
    }
}