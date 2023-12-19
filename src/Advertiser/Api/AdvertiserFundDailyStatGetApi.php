<?php

namespace AdOceanSdk\Advertiser\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 查询账户日流水
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710526682112
 */
class AdvertiserFundDailyStatGetApi extends RequestApi
{
    protected string $address = 'open_api/2/advertiser/fund/daily_stat/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Advertiser\Params\AdvertiserFundDailyStatGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertiser\Response\AdvertiserFundDailyStatGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertiser\Response\AdvertiserFundDailyStatGetResponse::from($response->toArray());
    }
}