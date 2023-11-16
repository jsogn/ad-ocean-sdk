<?php

namespace AdOceanSdk\Account\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取广告主信息
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710508983311
 */
class AccountAdvertiserInfoGetApi extends RequestApi
{
    protected string $address = 'open_api/2/advertiser/info/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Account\Params\AccountAdvertiserInfoGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Account\Response\AccountAdvertiserInfoGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Account\Response\AccountAdvertiserInfoGetResponse::from($response->toArray());
    }
}