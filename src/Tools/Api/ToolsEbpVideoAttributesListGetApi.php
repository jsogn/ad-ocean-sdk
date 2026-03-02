<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 升级版工作台获取视频素材评估标签
 * @doc  https://open.oceanengine.com/labels/7/docs/1855453250877440?origin=left_nav
 */
class ToolsEbpVideoAttributesListGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/ebp/video_attributes/list/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsEbpVideoAttributesListGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsEbpVideoAttributesListGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsEbpVideoAttributesListGetResponse::from($response->toArray());
    }
}