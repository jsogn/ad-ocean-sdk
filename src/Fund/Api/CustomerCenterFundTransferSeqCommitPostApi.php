<?php

namespace AdOceanSdk\Fund\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 提交转账交易号
 * @doc  https://open.oceanengine.com/labels/7/docs/1758606542833678
 */
class CustomerCenterFundTransferSeqCommitPostApi extends RequestApi
{
    protected string $address = 'open_api/2/customer_center/fund/transfer_seq/commit/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Fund\Params\CustomerCenterFundTransferSeqCommitPostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Fund\Response\CustomerCenterFundTransferSeqCommitPostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Fund\Response\CustomerCenterFundTransferSeqCommitPostResponse::from($response->toArray());
    }
}