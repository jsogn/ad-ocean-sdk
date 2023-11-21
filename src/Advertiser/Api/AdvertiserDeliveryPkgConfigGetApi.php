<?php

namespace AdOceanSdk\Advertiser\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 查询推广产品资质规则配置
 * @doc  https://open.oceanengine.com/labels/7/docs/1776710970860551
 */
class AdvertiserDeliveryPkgConfigGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/advertiser/delivery_pkg_config/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Advertiser\Params\AdvertiserDeliveryPkgConfigGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertiser\Response\AdvertiserDeliveryPkgConfigGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertiser\Response\AdvertiserDeliveryPkgConfigGetResponse::from($response->toArray());
    }
}