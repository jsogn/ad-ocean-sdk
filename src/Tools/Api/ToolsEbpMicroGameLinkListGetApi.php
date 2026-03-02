<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取字节小游戏链接详情
 * @doc  https://open.oceanengine.com/labels/7/docs/1847487751501836?origin=left_nav
 */
class ToolsEbpMicroGameLinkListGetApi extends RequestApi
{
    protected string $address = 'tools/visual_debug.html?docId=1847487751501836';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsEbpMicroGameLinkListGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsEbpMicroGameLinkListGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsEbpMicroGameLinkListGetResponse::from($response->toArray());
    }
}