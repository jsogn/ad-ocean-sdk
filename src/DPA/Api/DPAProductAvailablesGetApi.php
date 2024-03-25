<?php

namespace AdOceanSdk\DPA\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取商品库信息
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710577036288
 */
class DPAProductAvailablesGetApi extends RequestApi
{
    protected string $address = 'open_api/2/dpa/product/availables/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\DPA\Params\DPAProductAvailablesGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\DPA\Response\DPAProductAvailablesGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\DPA\Response\DPAProductAvailablesGetResponse::from($response->toArray());
    }
}