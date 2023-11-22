<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 素材前置预审结果获取
 * @doc  https://open.oceanengine.com/labels/7/docs/1722273278471172
 */
class ToolsPreAuditGetApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/pre_audit/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsPreAuditGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsPreAuditGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsPreAuditGetResponse::from($response->toArray());
    }
}