<?php

namespace AdOceanSdk\Advertiser\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 查询投放资质（新版）
 * @doc  https://open.oceanengine.com/labels/7/docs/1761500990156815
 */
class AdvertiserDeliveryQualificationListGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/advertiser/delivery_qualification/list/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Advertiser\Params\AdvertiserDeliveryQualificationListGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertiser\Response\AdvertiserDeliveryQualificationListGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertiser\Response\AdvertiserDeliveryQualificationListGetResponse::from($response->toArray());
    }
}