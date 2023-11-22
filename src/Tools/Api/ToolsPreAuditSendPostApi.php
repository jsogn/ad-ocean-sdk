<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 素材前置预审送审
 * @doc  https://open.oceanengine.com/labels/7/docs/1722273263150083
 */
class ToolsPreAuditSendPostApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/pre_audit/send/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\ToolsPreAuditSendPostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsPreAuditSendPostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsPreAuditSendPostResponse::from($response->toArray());
    }
}