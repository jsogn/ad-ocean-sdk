<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取评论列表
 * @doc  https://open.oceanengine.com/labels/7/docs/1754803808580608
 */
class ToolsCommentGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/comment/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsCommentGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsCommentGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsCommentGetResponse::from($response->toArray());
    }
}