<?php

namespace AdOceanSdk\DPA\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取商品库元信息
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710577566735
 */
class DPAMetaGetGetApi extends RequestApi
{
    protected string $address = 'open_api/2/dpa/meta/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\DPA\Params\DPAMetaGetGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\DPA\Response\DPAMetaGetGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\DPA\Response\DPAMetaGetGetResponse::from($response->toArray());
    }
}