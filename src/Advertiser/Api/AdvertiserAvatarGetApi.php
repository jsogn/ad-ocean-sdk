<?php

namespace AdOceanSdk\Advertiser\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取广告主账户头像
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710512904192
 */
class AdvertiserAvatarGetApi extends RequestApi
{
    protected string $address = 'open_api/2/advertiser/avatar/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Advertiser\Params\AdvertiserAvatarGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertiser\Response\AdvertiserAvatarGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertiser\Response\AdvertiserAvatarGetResponse::from($response->toArray());
    }
}