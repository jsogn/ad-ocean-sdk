<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 更新原生锚点
 * @doc  https://open.oceanengine.com/labels/7/docs/1780079786680328
 */
class NativeAnchorUpdatePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/native_anchor/update/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\NativeAnchorUpdatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\NativeAnchorUpdatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\NativeAnchorUpdatePostResponse::from($response->toArray());
    }
}