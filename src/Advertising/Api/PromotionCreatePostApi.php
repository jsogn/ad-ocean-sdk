<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 创建广告
 * @doc  https://open.oceanengine.com/labels/7/docs/1740946299496459
 */
class PromotionCreatePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/promotion/create/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Advertising\Params\PromotionCreatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\PromotionCreatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\PromotionCreatePostResponse::from($response->toArray());
    }
}