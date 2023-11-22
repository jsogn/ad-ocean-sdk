<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 关停正在起量的广告
 * @doc  https://open.oceanengine.com/labels/7/docs/1761603666011139
 */
class ToolsPromotionRaiseStopPostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/promotion_raise/stop/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\ToolsPromotionRaiseStopPostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsPromotionRaiseStopPostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsPromotionRaiseStopPostResponse::from($response->toArray());
    }
}