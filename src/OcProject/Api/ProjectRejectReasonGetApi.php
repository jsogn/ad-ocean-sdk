<?php

namespace AdOceanSdk\OcProject\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取投放项目审核建议
 * @doc  https://open.oceanengine.com/labels/7/docs/1854930234989579
 */
class ProjectRejectReasonGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/oc_project/reject_reason/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\OcProject\Params\ProjectRejectReasonGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\OcProject\Response\ProjectRejectReasonGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\OcProject\Response\ProjectRejectReasonGetResponse::from($response->toArray());
    }
}