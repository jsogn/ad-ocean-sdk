<?php

namespace AdOceanSdk\Fund\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 工作台转账-获取可转列表
 * @doc  https://open.oceanengine.com/labels/7/docs/1816052658391124
 */
class CgTransferCanTransferTargetListGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/cg_transfer/can_transfer_target/list/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Fund\Params\CgTransferCanTransferTargetListGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Fund\Response\CgTransferCanTransferTargetListGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Fund\Response\CgTransferCanTransferTargetListGetResponse::from($response->toArray());
    }
}