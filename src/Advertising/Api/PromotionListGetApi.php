<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取广告列表
 * @doc  https://open.oceanengine.com/labels/7/docs/1741028841006095
 */
class PromotionListGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/promotion/list/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Advertising\Params\PromotionListGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\PromotionListGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\PromotionListGetResponse::from($response->toArray());
    }
}