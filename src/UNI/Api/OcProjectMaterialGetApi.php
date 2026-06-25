<?php

namespace AdOceanSdk\UNI\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取投放项目下素材
 * @doc  https://open.oceanengine.com/labels/7/docs/1854927239666825
 */
class OcProjectMaterialGetApi extends RequestApi
{
    protected string $address = '';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\UNI\Params\OcProjectMaterialGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\UNI\Response\OcProjectMaterialGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\UNI\Response\OcProjectMaterialGetResponse::from($response->toArray());
    }
}