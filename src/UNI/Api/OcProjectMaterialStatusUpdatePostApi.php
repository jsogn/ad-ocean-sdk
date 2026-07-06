<?php

namespace AdOceanSdk\UNI\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 批量修改投放项目下素材状态
 * @doc  https://open.oceanengine.com/labels/7/docs/1854930119140363
 */
class OcProjectMaterialStatusUpdatePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/oc_project/material/status/update/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\UNI\Params\OcProjectMaterialStatusUpdatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\UNI\Response\OcProjectMaterialStatusUpdatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\UNI\Response\OcProjectMaterialStatusUpdatePostResponse::from($response->toArray());
    }
}
