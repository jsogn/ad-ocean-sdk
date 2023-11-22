<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 批量获取广告审核建议
 * @doc  https://open.oceanengine.com/labels/7/docs/1741031528693771
 */
class PromotionRejectReasonGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/promotion/reject_reason/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Advertising\Params\PromotionRejectReasonGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\PromotionRejectReasonGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\PromotionRejectReasonGetResponse::from($response->toArray());
    }
}