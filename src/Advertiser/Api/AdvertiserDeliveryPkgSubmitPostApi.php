<?php

namespace AdOceanSdk\Advertiser\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 提交/编辑推广产品资质
 * @doc  https://open.oceanengine.com/labels/7/docs/1776711210685572
 */
class AdvertiserDeliveryPkgSubmitPostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/advertiser/delivery_pkg/submit/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Advertiser\Params\AdvertiserDeliveryPkgSubmitPostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertiser\Response\AdvertiserDeliveryPkgSubmitPostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertiser\Response\AdvertiserDeliveryPkgSubmitPostResponse::from($response->toArray());
    }
}