<?php

namespace AdOceanSdk\Advertiser\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取主体资质（新版）
 * @doc  https://open.oceanengine.com/labels/7/docs/1743294338713611
 */
class AdvertiserQualificationGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/advertiser/qualification/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Advertiser\Params\AdvertiserQualificationGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertiser\Response\AdvertiserQualificationGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertiser\Response\AdvertiserQualificationGetResponse::from($response->toArray());
    }
}