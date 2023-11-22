<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 批量删除广告
 * @doc  https://open.oceanengine.com/labels/7/docs/1741031376580675
 */
class PromotionDeletePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/promotion/delete/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Advertising\Params\PromotionDeletePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\PromotionDeletePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\PromotionDeletePostResponse::from($response->toArray());
    }
}