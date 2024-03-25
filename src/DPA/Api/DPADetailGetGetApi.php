<?php

namespace AdOceanSdk\DPA\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取商品列表
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710578078732
 */
class DPADetailGetGetApi extends RequestApi
{
    protected string $address = 'open_api/2/dpa/detail/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\DPA\Params\DPADetailGetGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\DPA\Response\DPADetailGetGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\DPA\Response\DPADetailGetGetResponse::from($response->toArray());
    }
}