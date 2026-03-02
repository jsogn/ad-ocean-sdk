<?php

namespace AdOceanSdk\DPA\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取商品库DPA词包
 * @doc  https://open.oceanengine.com/labels/7/docs/1846199586366875?origin=left_nav
 */
class DpaEbpDictGetGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/dpa/ebp/dict/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\DPA\Params\DpaEbpDictGetGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\DPA\Response\DpaEbpDictGetGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\DPA\Response\DpaEbpDictGetGetResponse::from($response->toArray());
    }
}