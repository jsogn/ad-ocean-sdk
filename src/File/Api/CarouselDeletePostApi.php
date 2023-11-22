<?php

namespace AdOceanSdk\File\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 批量删除图文
 * @doc  https://open.oceanengine.com/labels/7/docs/1773561744826380
 */
class CarouselDeletePostApi extends RequestApi
{
    protected string $address = 'open_api/2/carousel/delete/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\File\Params\CarouselDeletePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\File\Response\CarouselDeletePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\File\Response\CarouselDeletePostResponse::from($response->toArray());
    }
}