<?php

namespace AdOceanSdk\DPA\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取通用版商品列表
 * @doc  https://open.oceanengine.com/labels/7/docs/1846200485909513?origin=left_nav
 */
class DpaEbpProductListGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/dpa/ebp/product/list/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\DPA\Params\DpaEbpProductListGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\DPA\Response\DpaEbpProductListGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\DPA\Response\DpaEbpProductListGetResponse::from($response->toArray());
    }
}