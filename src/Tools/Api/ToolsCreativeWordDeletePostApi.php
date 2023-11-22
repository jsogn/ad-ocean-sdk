<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 删除动态创意词包
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710719368207
 */
class ToolsCreativeWordDeletePostApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/creative_word/delete/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\ToolsCreativeWordDeletePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsCreativeWordDeletePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsCreativeWordDeletePostResponse::from($response->toArray());
    }
}