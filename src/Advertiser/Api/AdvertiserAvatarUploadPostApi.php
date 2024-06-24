<?php

namespace AdOceanSdk\Advertiser\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取广告主账户头像ID
 * @doc  https://open.oceanengine.com/labels/7/docs/1794039016601604
 */
class AdvertiserAvatarUploadPostApi extends RequestApi
{
    protected string $address = 'open_api/2/advertiser/avatar/upload/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Advertiser\Params\AdvertiserAvatarUploadPostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertiser\Response\AdvertiserAvatarUploadPostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertiser\Response\AdvertiserAvatarUploadPostResponse::from($response->toArray());
    }
}