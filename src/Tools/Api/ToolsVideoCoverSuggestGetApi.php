<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取视频智能封面
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710602404864
 */
class ToolsVideoCoverSuggestGetApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/video_cover/suggest/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsVideoCoverSuggestGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsVideoCoverSuggestGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsVideoCoverSuggestGetResponse::from($response->toArray());
    }
}