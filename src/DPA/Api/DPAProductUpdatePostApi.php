<?php

namespace AdOceanSdk\DPA\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 创建DPA商品（已有商品id）/修改DPA商品
 * @doc  https://open.oceanengine.com/labels/7/docs/1726081566816271
 */
class DPAProductUpdatePostApi extends RequestApi
{
    protected string $address = 'open_api/2/dpa/product/update/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\DPA\Params\DPAProductUpdatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\DPA\Response\DPAProductUpdatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\DPA\Response\DPAProductUpdatePostResponse::from($response->toArray());
    }
}