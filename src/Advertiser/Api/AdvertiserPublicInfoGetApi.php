<?php

namespace AdOceanSdk\Advertiser\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取广告主公开信息
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710511950860
 */
class AdvertiserPublicInfoGetApi extends RequestApi
{
    protected string $address = 'open_api/2/advertiser/public_info/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Advertiser\Params\AdvertiserPublicInfoGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertiser\Response\AdvertiserPublicInfoGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertiser\Response\AdvertiserPublicInfoGetResponse::from($response->toArray());
    }
}