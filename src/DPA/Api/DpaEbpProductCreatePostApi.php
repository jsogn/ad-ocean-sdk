<?php

namespace AdOceanSdk\DPA\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 升级版组织-新建通用版商品
 * @doc  https://open.oceanengine.com/labels/7/docs/1846200859217482?origin=left_nav
 */
class DpaEbpProductCreatePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/dpa/ebp/product/create/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\DPA\Params\DpaEbpProductCreatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\DPA\Response\DpaEbpProductCreatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\DPA\Response\DpaEbpProductCreatePostResponse::from($response->toArray());
    }
}