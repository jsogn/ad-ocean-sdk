<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 更改创意状态
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710543049740
 */
class AdvertiserCreativeUpdateStatusPostApi extends RequestApi
{
    protected string $address = 'athena/faq/index.html?plat_id=7&id=228';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Advertising\Params\AdvertiserCreativeUpdateStatusPostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\AdvertiserCreativeUpdateStatusPostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\AdvertiserCreativeUpdateStatusPostResponse::from($response->toArray());
    }
}