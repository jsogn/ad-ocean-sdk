<?php

namespace AdOceanSdk\DPA\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 创建DPA商品（无商品id）
 * @doc  https://open.oceanengine.com/labels/7/docs/1726081113859075
 */
class DPAProductCreatePostApi extends RequestApi
{
    protected string $address = 'open_api/2/dpa/product/create/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\DPA\Params\DPAProductCreatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\DPA\Response\DPAProductCreatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\DPA\Response\DPAProductCreatePostResponse::from($response->toArray());
    }
}