<?php

namespace AdOceanSdk\DPA\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取升级版商品列表
 * @doc  https://open.oceanengine.com/labels/7/docs/1846200582278283?origin=left_nav
 */
class DpaEbpClueProductListGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/dpa/ebp/clue_product/list/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\DPA\Params\DpaEbpClueProductListGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\DPA\Response\DpaEbpClueProductListGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\DPA\Response\DpaEbpClueProductListGetResponse::from($response->toArray());
    }
}