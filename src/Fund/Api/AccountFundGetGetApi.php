<?php

namespace AdOceanSdk\Fund\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 批量查询账户余额
 * @doc  https://open.oceanengine.com/labels/7/docs/1799006604968971
 */
class AccountFundGetGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/account/fund/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Fund\Params\AccountFundGetGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Fund\Response\AccountFundGetGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Fund\Response\AccountFundGetGetResponse::from($response->toArray());
    }
}