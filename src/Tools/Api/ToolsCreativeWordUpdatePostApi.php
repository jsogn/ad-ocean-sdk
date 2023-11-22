<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 更新动态创意词包
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710718730240
 */
class ToolsCreativeWordUpdatePostApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/creative_word/update/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\ToolsCreativeWordUpdatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsCreativeWordUpdatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsCreativeWordUpdatePostResponse::from($response->toArray());
    }
}