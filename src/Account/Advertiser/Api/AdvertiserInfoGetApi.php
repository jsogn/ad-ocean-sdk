<?php

namespace AdOceanSdk\Account\Advertiser\Api;

use AdOceanSdk\Account\Advertiser\Response\AdvertiserInfoGetResponse;
use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取广告主信息接口
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710508983311
 */
class AdvertiserInfoGetApi extends RequestApi
{
    protected string $address = 'open_api/2/advertiser/info/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(RequestParamInterface|array $params = []): AdvertiserInfoGetResponse
    {
        $response = parent::call($params);

        return AdvertiserInfoGetResponse::from($response->toArray());
    }
}