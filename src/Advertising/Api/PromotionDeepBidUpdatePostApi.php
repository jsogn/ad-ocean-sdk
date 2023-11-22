<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 批量修改深度出价
 * @doc  https://open.oceanengine.com/labels/7/docs/1755355890182159
 */
class PromotionDeepBidUpdatePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/promotion/deepbid/update/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Advertising\Params\PromotionDeepBidUpdatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\PromotionDeepBidUpdatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\PromotionDeepBidUpdatePostResponse::from($response->toArray());
    }
}