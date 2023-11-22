<?php

namespace AdOceanSdk\File\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 上传图文
 * @doc  https://open.oceanengine.com/labels/7/docs/1773552433235140
 */
class CarouselCreatePostApi extends RequestApi
{
    protected string $address = 'open_api/2/carousel/create/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\File\Params\CarouselCreatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\File\Response\CarouselCreatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\File\Response\CarouselCreatePostResponse::from($response->toArray());
    }
}