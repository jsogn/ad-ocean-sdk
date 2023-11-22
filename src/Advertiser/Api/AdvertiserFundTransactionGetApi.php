<?php

namespace AdOceanSdk\Advertiser\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 查询账号流水明细
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710527205388
 */
class AdvertiserFundTransactionGetApi extends RequestApi
{
    protected string $address = 'open_api/2/advertiser/fund/transaction/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Advertiser\Params\AdvertiserFundTransactionGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertiser\Response\AdvertiserFundTransactionGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertiser\Response\AdvertiserFundTransactionGetResponse::from($response->toArray());
    }
}