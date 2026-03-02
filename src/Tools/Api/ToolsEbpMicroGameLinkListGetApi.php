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
    protected string $address = 'open_api/v3.0/tools/ebp/micro_game/link/list/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsEbpMicroGameLinkListGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsEbpMicroGameLinkListGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsEbpMicroGameLinkListGetResponse::from($response->toArray());
    }
}