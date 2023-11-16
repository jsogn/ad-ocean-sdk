<?php

namespace AdOceanSdk\Account\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 修改广告主信息
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710517205007
 */
class AccountAdvertiserUpdatePostApi extends RequestApi
{
    protected string $address = 'open_api/2/agent/advertiser/update/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Account\Params\AccountAdvertiserUpdatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Account\Response\AccountAdvertiserUpdatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Account\Response\AccountAdvertiserUpdatePostResponse::from($response->toArray());
    }
}