<?php

namespace AdOceanSdk\DPA\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 升级版组织-编辑通用版商品
 * @doc  https://open.oceanengine.com/labels/7/docs/1846200800780617?origin=left_nav
 */
class DpaEbpProductUpdatePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/dpa/ebp/product/update/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\DPA\Params\DpaEbpProductUpdatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\DPA\Response\DpaEbpProductUpdatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\DPA\Response\DpaEbpProductUpdatePostResponse::from($response->toArray());
    }
}