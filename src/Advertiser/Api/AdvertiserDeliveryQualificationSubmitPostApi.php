<?php

namespace AdOceanSdk\Advertiser\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 提交投放资质（新版）
 * @doc  https://open.oceanengine.com/labels/7/docs/1761501324513352
 */
class AdvertiserDeliveryQualificationSubmitPostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/advertiser/delivery_qualification/submit/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Advertiser\Params\AdvertiserDeliveryQualificationSubmitPostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertiser\Response\AdvertiserDeliveryQualificationSubmitPostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertiser\Response\AdvertiserDeliveryQualificationSubmitPostResponse::from($response->toArray());
    }
}