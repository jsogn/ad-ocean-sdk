<?php

namespace AdOceanSdk\Advertiser\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 更新广告主账户头像
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710512435215
 */
class AdvertiserAvatarSubmitPostApi extends RequestApi
{
    protected string $address = 'open_api/2/advertiser/avatar/submit/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Advertiser\Params\AdvertiserAvatarSubmitPostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertiser\Response\AdvertiserAvatarSubmitPostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertiser\Response\AdvertiserAvatarSubmitPostResponse::from($response->toArray());
    }
}