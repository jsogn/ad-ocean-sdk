<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 创建动态创意词包
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710717478927
 */
class ToolsCreativeWordCreatePostApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/creative_word/create/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\ToolsCreativeWordCreatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsCreativeWordCreatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsCreativeWordCreatePostResponse::from($response->toArray());
    }
}