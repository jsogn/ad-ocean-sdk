<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取字节小程序link详情
 * @doc  https://open.oceanengine.com/labels/7/docs/1847487745198092?origin=left_nav
 */
class ToolsEbpMicroAppletLinkListGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/ebp/micro_applet/link/list/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsEbpMicroAppletLinkListGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsEbpMicroAppletLinkListGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsEbpMicroAppletLinkListGetResponse::from($response->toArray());
    }
}