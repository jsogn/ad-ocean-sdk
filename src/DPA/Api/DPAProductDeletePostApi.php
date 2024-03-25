<?php

namespace AdOceanSdk\DPA\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 删除DPA商品
 * @doc  https://open.oceanengine.com/labels/7/docs/1726629070419968
 */
class DPAProductDeletePostApi extends RequestApi
{
    protected string $address = 'open_api/2/dpa/product/delete/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\DPA\Params\DPAProductDeletePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\DPA\Response\DPAProductDeletePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\DPA\Response\DPAProductDeletePostResponse::from($response->toArray());
    }
}