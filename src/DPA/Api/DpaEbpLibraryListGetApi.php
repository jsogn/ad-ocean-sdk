<?php

namespace AdOceanSdk\DPA\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取商品库列表
 * @doc  https://open.oceanengine.com/labels/7/docs/1846200555058186?origin=left_nav
 */
class DpaEbpLibraryListGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/dpa/ebp/library/list/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\DPA\Params\DpaEbpLibraryListGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\DPA\Response\DpaEbpLibraryListGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\DPA\Response\DpaEbpLibraryListGetResponse::from($response->toArray());
    }
}