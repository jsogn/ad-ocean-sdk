<?php

namespace AdOceanSdk\Advertiser\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 查询账户可转余额
 * @doc  https://open.oceanengine.com/labels/7/docs/1725634464247879
 */
class AdvertiserTransferableFundGetApi extends RequestApi
{
    protected string $address = 'open_api/2/advertiser/transferable_fund/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Advertiser\Params\AdvertiserTransferableFundGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertiser\Response\AdvertiserTransferableFundGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertiser\Response\AdvertiserTransferableFundGetResponse::from($response->toArray());
    }
}