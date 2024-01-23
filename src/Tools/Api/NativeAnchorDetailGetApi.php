<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取原生锚点详情
 * @doc  https://open.oceanengine.com/labels/7/docs/1786407342576640
 */
class NativeAnchorDetailGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/native_anchor/get/detail/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\NativeAnchorDetailGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\NativeAnchorDetailGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\NativeAnchorDetailGetResponse::from($response->toArray());
    }
}