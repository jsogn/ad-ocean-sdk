<?php

namespace AdOceanSdk\DPA\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 删除通用版商品
 * @doc  https://open.oceanengine.com/labels/7/docs/1846200772027529?origin=left_nav
 */
class DpaEbpProductDeletePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/dpa/ebp/product/delete/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\DPA\Params\DpaEbpProductDeletePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\DPA\Response\DpaEbpProductDeletePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\DPA\Response\DpaEbpProductDeletePostResponse::from($response->toArray());
    }
}