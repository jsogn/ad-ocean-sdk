<?php

namespace AdOceanSdk\DPA\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取线索商品详情
 * @doc  https://open.oceanengine.com/labels/7/docs/1779436000953415
 */
class DPAClueProductDetailGetApi extends RequestApi
{
    protected string $address = 'open_api/2/dpa/clue_product/detail/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\DPA\Params\DPAClueProductDetailGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\DPA\Response\DPAClueProductDetailGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\DPA\Response\DPAClueProductDetailGetResponse::from($response->toArray());
    }
}