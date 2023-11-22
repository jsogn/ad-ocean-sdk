<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 批量更新广告启用状态
 * @doc  https://open.oceanengine.com/labels/7/docs/1741031308559364
 */
class PromotionStatusUpdatePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/promotion/status/update/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Advertising\Params\PromotionStatusUpdatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\PromotionStatusUpdatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\PromotionStatusUpdatePostResponse::from($response->toArray());
    }
}