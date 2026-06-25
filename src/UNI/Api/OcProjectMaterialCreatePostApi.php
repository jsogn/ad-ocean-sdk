<?php

namespace AdOceanSdk\UNI\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 批量添加投放项目下素材
 * @doc  https://open.oceanengine.com/labels/7/docs/1854929666566346
 */
class OcProjectMaterialCreatePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/oc_project/material/create/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\UNI\Params\OcProjectMaterialCreatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\UNI\Response\OcProjectMaterialCreatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\UNI\Response\OcProjectMaterialCreatePostResponse::from($response->toArray());
    }
}