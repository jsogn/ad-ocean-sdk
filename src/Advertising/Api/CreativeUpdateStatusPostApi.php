<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 更改创意状态
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710543049740
 */
class CreativeUpdateStatusPostApi extends RequestApi
{
    protected string $address = 'athena/faq/index.html?plat_id=7&id=228';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Advertising\Params\CreativeUpdateStatusPostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\CreativeUpdateStatusPostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\CreativeUpdateStatusPostResponse::from($response->toArray());
    }
}