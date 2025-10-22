<?php

namespace AdOceanSdk\Fund\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 资金共享-共享钱包信息查询
 * @doc  https://open.oceanengine.com/labels/7/docs/1798465885126668
 */
class SharedWalletMainWalletGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/shared_wallet/main_wallet/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Fund\Params\SharedWalletMainWalletGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Fund\Response\SharedWalletMainWalletGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Fund\Response\SharedWalletMainWalletGetResponse::from($response->toArray());
    }
}