<?php

namespace AdOceanSdk\Fund\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 提交转账交易号（方舟）
 * @doc  https://open.oceanengine.com/labels/7/docs/1766755371753487
 */
class AgentTransferSeqCommitPostApi extends RequestApi
{
    protected string $address = 'open_api/2/agent/fund/transfer_seq/commit/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Fund\Params\AgentTransferSeqCommitPostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Fund\Response\AgentTransferSeqCommitPostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Fund\Response\AgentTransferSeqCommitPostResponse::from($response->toArray());
    }
}