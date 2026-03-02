<?php

namespace AdOceanSdk\DPA\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取商品库DPA分类
 * @doc  https://open.oceanengine.com/labels/7/docs/1846200236566720?origin=left_nav
 */
class DpaEbpCategoryGetGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/dpa/ebp/category/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\DPA\Params\DpaEbpCategoryGetGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\DPA\Response\DpaEbpCategoryGetGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\DPA\Response\DpaEbpCategoryGetGetResponse::from($response->toArray());
    }
}