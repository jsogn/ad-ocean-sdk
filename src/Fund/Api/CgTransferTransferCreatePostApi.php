<?php

namespace AdOceanSdk\Fund\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 工作台转账-发起转账
 * @doc  https://open.oceanengine.com/labels/7/docs/1816052723776516
 */
class CgTransferTransferCreatePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/cg_transfer/transfer/create/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Fund\Params\CgTransferTransferCreatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Fund\Response\CgTransferTransferCreatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Fund\Response\CgTransferTransferCreatePostResponse::from($response->toArray());
    }
}