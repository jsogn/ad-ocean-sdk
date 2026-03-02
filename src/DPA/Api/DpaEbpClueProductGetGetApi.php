<?php

namespace AdOceanSdk\DPA\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取升级版商品详情
 * @doc  https://open.oceanengine.com/labels/7/docs/1846200329551114?origin=left_nav
 */
class DpaEbpClueProductGetGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/dpa/ebp/clue_product/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\DPA\Params\DpaEbpClueProductGetGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\DPA\Response\DpaEbpClueProductGetGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\DPA\Response\DpaEbpClueProductGetGetResponse::from($response->toArray());
    }
}