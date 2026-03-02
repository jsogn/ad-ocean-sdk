<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 升级版工作台上传视频
 * @doc  https://open.oceanengine.com/labels/7/docs/1855448450527623?origin=left_nav
 */
class ToolsEbpVideoUploadPostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/ebp/video/upload/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\ToolsEbpVideoUploadPostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsEbpVideoUploadPostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsEbpVideoUploadPostResponse::from($response->toArray());
    }
}