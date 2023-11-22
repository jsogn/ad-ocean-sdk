<?php

namespace AdOceanSdk\File\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 更新图文信息
 * @doc  https://open.oceanengine.com/labels/7/docs/1773554529716228
 */
class CarouselUpdatePostApi extends RequestApi
{
    protected string $address = 'open_api/2/carousel/update/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\File\Params\CarouselUpdatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\File\Response\CarouselUpdatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\File\Response\CarouselUpdatePostResponse::from($response->toArray());
    }
}