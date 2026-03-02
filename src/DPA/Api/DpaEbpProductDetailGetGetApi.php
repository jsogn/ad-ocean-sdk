<?php

namespace AdOceanSdk\DPA\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取通用版商品详情
 * @doc  https://open.oceanengine.com/labels/7/docs/1846200441152906?origin=left_nav
 */
class DpaEbpProductDetailGetGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/dpa/ebp/product/detail/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\DPA\Params\DpaEbpProductDetailGetGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\DPA\Response\DpaEbpProductDetailGetGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\DPA\Response\DpaEbpProductDetailGetGetResponse::from($response->toArray());
    }
}