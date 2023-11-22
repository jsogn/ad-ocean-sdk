<?php

namespace AdOceanSdk\Fund\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 创建转账交易号（方舟）
 * @doc  https://open.oceanengine.com/labels/7/docs/1766755293435980
 */
class AgentTransferSeqCreatePostApi extends RequestApi
{
    protected string $address = 'open_api/2/agent/fund/transfer_seq/create/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Fund\Params\AgentTransferSeqCreatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Fund\Response\AgentTransferSeqCreatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Fund\Response\AgentTransferSeqCreatePostResponse::from($response->toArray());
    }
}