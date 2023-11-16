<?php

namespace AdOceanSdk\Advertiser\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取广告主信息
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710508983311
 */
class AdvertiserInfoGetApi extends RequestApi
{
    protected string $address = 'open_api/2/advertiser/info/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Advertiser\Params\AdvertiserInfoGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertiser\Response\AdvertiserInfoGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertiser\Response\AdvertiserInfoGetResponse::from($response->toArray());
    }
}