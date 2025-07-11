<?php

namespace AdOceanSdk\Fund\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 工作台转账-获取最大可转余额
 * @doc  https://open.oceanengine.com/labels/7/docs/1816052561374300
 */
class CgTransferCanTransferBalanceGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/cg_transfer/can_transfer_balance/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Fund\Params\CgTransferCanTransferBalanceGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Fund\Response\CgTransferCanTransferBalanceGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Fund\Response\CgTransferCanTransferBalanceGetResponse::from($response->toArray());
    }
}