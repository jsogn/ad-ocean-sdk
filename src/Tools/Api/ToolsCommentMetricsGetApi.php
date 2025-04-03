<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取评论统计指标
 * @doc  https://open.oceanengine.com/labels/7/docs/1779551814119427
 */
class ToolsCommentMetricsGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/comment_metrics/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsCommentMetricsGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsCommentMetricsGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsCommentMetricsGetResponse::from($response->toArray());
    }
}