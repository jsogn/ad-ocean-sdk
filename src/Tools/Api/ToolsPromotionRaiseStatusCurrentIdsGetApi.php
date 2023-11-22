<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取广告起量状态
 * @doc  https://open.oceanengine.com/labels/7/docs/1765406483367948
 */
class ToolsPromotionRaiseStatusCurrentIdsGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/promotion_raise_status_current_ids/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsPromotionRaiseStatusCurrentIdsGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsPromotionRaiseStatusCurrentIdsGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsPromotionRaiseStatusCurrentIdsGetResponse::from($response->toArray());
    }
}