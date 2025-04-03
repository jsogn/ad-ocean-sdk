<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取评论视频ID列表
 * @doc  https://open.oceanengine.com/labels/7/docs/1773084580896776
 */
class ToolsCommentMid2itemIdGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/comment/mid2item_id/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsCommentMid2itemIdGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsCommentMid2itemIdGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsCommentMid2itemIdGetResponse::from($response->toArray());
    }
}