<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 升级版工作台更新视频
 * @doc  https://open.oceanengine.com/labels/7/docs/1855449500037184?origin=left_nav
 */
class ToolsEbpVideoUpdatePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/ebp/video/update/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\ToolsEbpVideoUpdatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsEbpVideoUpdatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsEbpVideoUpdatePostResponse::from($response->toArray());
    }
}