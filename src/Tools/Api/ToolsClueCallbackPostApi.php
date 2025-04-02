<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 回传有效线索
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710631812096
 */
class ToolsClueCallbackPostApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/clue/callback/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\ToolsClueCallbackPostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsClueCallbackPostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsClueCallbackPostResponse::from($response->toArray());
    }
}