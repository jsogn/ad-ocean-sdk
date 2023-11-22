<?php

namespace AdOceanSdk\File\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取同主体下广告主图文素材
 * @doc  https://open.oceanengine.com/labels/7/docs/1773560989475840
 */
class CarouselAdGetApi extends RequestApi
{
    protected string $address = 'open_api/2/carousel/ad/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\File\Params\CarouselAdGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\File\Response\CarouselAdGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\File\Response\CarouselAdGetResponse::from($response->toArray());
    }
}