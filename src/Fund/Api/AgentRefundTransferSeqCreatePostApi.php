<?php

namespace AdOceanSdk\Fund\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 创建退款交易号（方舟）
 * @doc  https://open.oceanengine.com/labels/7/docs/1766755414170636
 */
class AgentRefundTransferSeqCreatePostApi extends RequestApi
{
    protected string $address = 'open_api/2/agent/refund/transfer_seq/create/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Fund\Params\AgentRefundTransferSeqCreatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Fund\Response\AgentRefundTransferSeqCreatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Fund\Response\AgentRefundTransferSeqCreatePostResponse::from($response->toArray());
    }
}