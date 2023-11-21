<?php

namespace AdOceanSdk\Advertiser\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 查询推广产品资质
 * @doc  https://open.oceanengine.com/labels/7/docs/1776711148266572
 */
class AdvertiserDeliveryPkgGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/advertiser/delivery_pkg/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Advertiser\Params\AdvertiserDeliveryPkgGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertiser\Response\AdvertiserDeliveryPkgGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertiser\Response\AdvertiserDeliveryPkgGetResponse::from($response->toArray());
    }
}