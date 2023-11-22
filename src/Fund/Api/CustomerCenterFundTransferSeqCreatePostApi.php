<?php

namespace AdOceanSdk\Fund\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 创建转账交易号
 * @doc  https://open.oceanengine.com/labels/7/docs/1758606134468620
 */
class CustomerCenterFundTransferSeqCreatePostApi extends RequestApi
{
    protected string $address = 'open_api/2/customer_center/fund/transfer_seq/create/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Fund\Params\CustomerCenterFundTransferSeqCreatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Fund\Response\CustomerCenterFundTransferSeqCreatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Fund\Response\CustomerCenterFundTransferSeqCreatePostResponse::from($response->toArray());
    }
}