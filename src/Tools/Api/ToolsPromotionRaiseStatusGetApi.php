<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取一键起量方案列表
 * @doc  https://open.oceanengine.com/labels/7/docs/1761603513577476
 */
class ToolsPromotionRaiseStatusGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/promotion_raise_status/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsPromotionRaiseStatusGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsPromotionRaiseStatusGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsPromotionRaiseStatusGetResponse::from($response->toArray());
    }
}