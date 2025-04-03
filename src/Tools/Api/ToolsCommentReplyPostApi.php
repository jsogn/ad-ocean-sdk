<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 回复评论
 * @doc  https://open.oceanengine.com/labels/7/docs/1754803971592192
 */
class ToolsCommentReplyPostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/comment/reply/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\ToolsCommentReplyPostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsCommentReplyPostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsCommentReplyPostResponse::from($response->toArray());
    }
}