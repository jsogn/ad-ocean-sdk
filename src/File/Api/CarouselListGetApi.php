<?php

namespace AdOceanSdk\File\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取图文素材
 * @doc  https://open.oceanengine.com/labels/7/docs/1773554026740736
 */
class CarouselListGetApi extends RequestApi
{
    protected string $address = 'open_api/2/carousel/list/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\File\Params\CarouselListGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\File\Response\CarouselListGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\File\Response\CarouselListGetResponse::from($response->toArray());
    }
}