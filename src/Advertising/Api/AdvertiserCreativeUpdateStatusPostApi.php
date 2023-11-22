<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 更新创意状态
 * @doc  https://open.oceanengine.com/labels/7/docs/1700170319321092
 */
class AdvertiserCreativeUpdateStatusPostApi extends RequestApi
{
    protected string $address = 'open_api/2/creative/update/status/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Advertising\Params\AdvertiserCreativeUpdateStatusPostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\AdvertiserCreativeUpdateStatusPostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\AdvertiserCreativeUpdateStatusPostResponse::from($response->toArray());
    }
}