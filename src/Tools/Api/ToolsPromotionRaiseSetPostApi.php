<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 开启/更新一键起量
 * @doc  https://open.oceanengine.com/labels/7/docs/1761603589597259
 */
class ToolsPromotionRaiseSetPostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/promotion_raise/set/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\ToolsPromotionRaiseSetPostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsPromotionRaiseSetPostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsPromotionRaiseSetPostResponse::from($response->toArray());
    }
}