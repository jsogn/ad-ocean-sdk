<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取起量版本信息
 * @doc  https://open.oceanengine.com/labels/7/docs/1761603462670403
 */
class ToolsPromotionRaiseVersionGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/promotion_raise_version/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsPromotionRaiseVersionGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsPromotionRaiseVersionGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsPromotionRaiseVersionGetResponse::from($response->toArray());
    }
}