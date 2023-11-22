<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 采纳广告诊断建议
 * @doc  https://open.oceanengine.com/labels/7/docs/1754716131916803
 */
class ToolsPromotionDiagnosisSuggestionAcceptPostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/promotion_diagnosis/suggestion/accept/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\ToolsPromotionDiagnosisSuggestionAcceptPostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsPromotionDiagnosisSuggestionAcceptPostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsPromotionDiagnosisSuggestionAcceptPostResponse::from($response->toArray());
    }
}