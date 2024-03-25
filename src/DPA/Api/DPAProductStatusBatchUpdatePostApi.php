<?php

namespace AdOceanSdk\DPA\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 批量修改DPA商品状态
 * @doc  https://open.oceanengine.com/labels/7/docs/1726637930114048
 */
class DPAProductStatusBatchUpdatePostApi extends RequestApi
{
    protected string $address = 'open_api/2/dpa/product_status/batch_update/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\DPA\Params\DPAProductStatusBatchUpdatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\DPA\Response\DPAProductStatusBatchUpdatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\DPA\Response\DPAProductStatusBatchUpdatePostResponse::from($response->toArray());
    }
}