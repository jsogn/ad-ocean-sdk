<?php

namespace AdOceanSdk\DPA\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 批量修改DPA商品状态
 * @doc  https://open.oceanengine.com/labels/7/docs/1846200705851659?origin=left_nav
 */
class DpaEbpProductStatusBatchUpdatePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/dpa/ebp/product_status/batch_update/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\DPA\Params\DpaEbpProductStatusBatchUpdatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\DPA\Response\DpaEbpProductStatusBatchUpdatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\DPA\Response\DpaEbpProductStatusBatchUpdatePostResponse::from($response->toArray());
    }
}