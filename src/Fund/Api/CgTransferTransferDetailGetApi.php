<?php

namespace AdOceanSdk\Fund\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 工作台转账-查询转账单信息
 * @doc  https://open.oceanengine.com/labels/7/docs/1816052335753539
 */
class CgTransferTransferDetailGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/cg_transfer/transfer_detail/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Fund\Params\CgTransferTransferDetailGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Fund\Response\CgTransferTransferDetailGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Fund\Response\CgTransferTransferDetailGetResponse::from($response->toArray());
    }
}