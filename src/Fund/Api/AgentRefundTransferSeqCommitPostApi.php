<?php

namespace AdOceanSdk\Fund\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @deprecated 已被废弃，无法使用
 * @desc 提交退款交易号（方舟）
 * @doc  https://open.oceanengine.com/labels/7/docs/1766755445237824
 */
class AgentRefundTransferSeqCommitPostApi extends RequestApi
{
    protected string $address = 'open_api/2/agent/refund/transfer_seq/commit/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Fund\Params\AgentRefundTransferSeqCommitPostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Fund\Response\AgentRefundTransferSeqCommitPostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Fund\Response\AgentRefundTransferSeqCommitPostResponse::from($response->toArray());
    }
}