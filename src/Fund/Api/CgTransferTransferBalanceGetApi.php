<?php

namespace AdOceanSdk\Fund\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 工作台转账-查询账户转账余额
 * @doc  https://open.oceanengine.com/labels/7/docs/1816052431206464
 */
class CgTransferTransferBalanceGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/cg_transfer/transfer_balance/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Fund\Params\CgTransferTransferBalanceGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Fund\Response\CgTransferTransferBalanceGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Fund\Response\CgTransferTransferBalanceGetResponse::from($response->toArray());
    }
}