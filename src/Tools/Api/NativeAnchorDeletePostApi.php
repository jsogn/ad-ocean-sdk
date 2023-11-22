<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 删除原生锚点
 * @doc  https://open.oceanengine.com/labels/7/docs/1780079261760524
 */
class NativeAnchorDeletePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/native_anchor/delete/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\NativeAnchorDeletePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\NativeAnchorDeletePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\NativeAnchorDeletePostResponse::from($response->toArray());
    }
}