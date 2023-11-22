<?php

namespace AdOceanSdk\Advertiser\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 查询账号余额
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710526192652
 */
class AdvertiserFundGetApi extends RequestApi
{
    protected string $address = 'open_api/2/advertiser/fund/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Advertiser\Params\AdvertiserFundGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertiser\Response\AdvertiserFundGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertiser\Response\AdvertiserFundGetResponse::from($response->toArray());
    }
}