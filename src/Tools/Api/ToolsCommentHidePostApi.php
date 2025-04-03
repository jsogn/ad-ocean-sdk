<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 隐藏评论
 * @doc  https://open.oceanengine.com/labels/7/docs/1754804147204108
 */
class ToolsCommentHidePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/comment/hide/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\ToolsCommentHidePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsCommentHidePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsCommentHidePostResponse::from($response->toArray());
    }
}