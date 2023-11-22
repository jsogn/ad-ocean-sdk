<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 建站工具-建站复制
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710623908864
 */
class ToolsSiteCopyPostApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/site/copy/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\ToolsSiteCopyPostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsSiteCopyPostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsSiteCopyPostResponse::from($response->toArray());
    }
}