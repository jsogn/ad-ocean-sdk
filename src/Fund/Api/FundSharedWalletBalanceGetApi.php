<?php

namespace AdOceanSdk\Fund\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取返货共享钱包余额
 * @doc  https://open.oceanengine.com/labels/7/docs/1703323812831239
 */
class FundSharedWalletBalanceGetApi extends RequestApi
{
    protected string $address = 'open_api/2/fund/shared_wallet_balance/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Fund\Params\FundSharedWalletBalanceGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Fund\Response\FundSharedWalletBalanceGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Fund\Response\FundSharedWalletBalanceGetResponse::from($response->toArray());
    }
}