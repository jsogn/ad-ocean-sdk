<?php

namespace AdOceanSdk\DPA\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取线索商品列表
 * @doc  https://open.oceanengine.com/labels/7/docs/1779430442685440
 */
class DPAClueProductListGetApi extends RequestApi
{
    protected string $address = 'open_api/2/dpa/clue_product/list/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\DPA\Params\DPAClueProductListGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\DPA\Response\DPAClueProductListGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\DPA\Response\DPAClueProductListGetResponse::from($response->toArray());
    }
}