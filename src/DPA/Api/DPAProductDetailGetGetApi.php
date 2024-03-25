<?php

namespace AdOceanSdk\DPA\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取商品详情
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710578614272
 */
class DPAProductDetailGetGetApi extends RequestApi
{
    protected string $address = 'open_api/2/dpa/product/detail/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\DPA\Params\DPAProductDetailGetGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\DPA\Response\DPAProductDetailGetGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\DPA\Response\DPAProductDetailGetGetResponse::from($response->toArray());
    }
}