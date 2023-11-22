<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取广告诊断建议
 * @doc  https://open.oceanengine.com/labels/7/docs/1754715780584459
 */
class ToolsPromotionDiagnosisSuggestionGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/promotion_diagnosis/suggestion/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsPromotionDiagnosisSuggestionGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsPromotionDiagnosisSuggestionGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsPromotionDiagnosisSuggestionGetResponse::from($response->toArray());
    }
}