<?php

namespace AdOceanSdk\Advertiser\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 修改广告主信息
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710517205007
 */
class AdvertiserUpdatePostApi extends RequestApi
{
    protected string $address = 'open_api/2/agent/advertiser/update/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Advertiser\Params\AdvertiserUpdatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertiser\Response\AdvertiserUpdatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertiser\Response\AdvertiserUpdatePostResponse::from($response->toArray());
    }
}