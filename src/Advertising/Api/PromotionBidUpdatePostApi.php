<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 批量更新广告出价
 * @doc  https://open.oceanengine.com/labels/7/docs/1741031138305028
 */
class PromotionBidUpdatePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/promotion/bid/update/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Advertising\Params\PromotionBidUpdatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\PromotionBidUpdatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\PromotionBidUpdatePostResponse::from($response->toArray());
    }
}