<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 修改广告
 * @doc  https://open.oceanengine.com/labels/7/docs/1740952287987719
 */
class PromotionUpdatePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/promotion/update/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Advertising\Params\PromotionUpdatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\PromotionUpdatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\PromotionUpdatePostResponse::from($response->toArray());
    }
}