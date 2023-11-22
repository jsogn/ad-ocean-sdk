<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取关联云图的广告主账户信息
 * @doc  https://open.oceanengine.com/labels/7/docs/1768100113310735
 */
class CDPBrandGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/cdp/brand/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Advertising\Params\CDPBrandGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\CDPBrandGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\CDPBrandGetResponse::from($response->toArray());
    }
}