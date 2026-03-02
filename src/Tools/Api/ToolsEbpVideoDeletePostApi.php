<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 升级版工作台批量删除视频
 * @doc  https://open.oceanengine.com/labels/7/docs/1855450454372428?origin=left_nav
 */
class ToolsEbpVideoDeletePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/ebp/video/delete/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\ToolsEbpVideoDeletePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsEbpVideoDeletePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsEbpVideoDeletePostResponse::from($response->toArray());
    }
}