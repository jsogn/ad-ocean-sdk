<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 建站工具-建站转赠
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710623352844
 */
class ToolsSiteHandselPostApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/site/handsel/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\ToolsSiteHandselPostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsSiteHandselPostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsSiteHandselPostResponse::from($response->toArray());
    }
}