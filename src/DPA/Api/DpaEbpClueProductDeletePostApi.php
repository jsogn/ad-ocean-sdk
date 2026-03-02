<?php

namespace AdOceanSdk\DPA\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 删除升级版商品
 * @doc  https://open.oceanengine.com/labels/7/docs/1846200682152971?origin=left_nav
 */
class DpaEbpClueProductDeletePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/dpa/ebp/clue_product/delete/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\DPA\Params\DpaEbpClueProductDeletePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\DPA\Response\DpaEbpClueProductDeletePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\DPA\Response\DpaEbpClueProductDeletePostResponse::from($response->toArray());
    }
}