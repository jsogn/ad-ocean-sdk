<?php

namespace AdOceanSdk\Fund\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 查询代理商转账记录
 * @doc  https://open.oceanengine.com/labels/7/docs/1795124749017235
 */
class AgentTransferTransactionRecordGetApi extends RequestApi
{
    protected string $address = 'open_api/2/agent/transfer/transaction_record/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Fund\Params\AgentTransferTransactionRecordGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Fund\Response\AgentTransferTransactionRecordGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Fund\Response\AgentTransferTransactionRecordGetResponse::from($response->toArray());
    }
}