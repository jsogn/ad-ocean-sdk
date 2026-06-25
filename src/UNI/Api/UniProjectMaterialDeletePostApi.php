<?php

namespace AdOceanSdk\UNI\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 删除投放项目下素材
 * @doc  https://open.oceanengine.com/labels/7/docs/1854929995241483
 */
class UniProjectMaterialDeletePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/uni_project/material/delete/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\UNI\Params\UniProjectMaterialDeletePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\UNI\Response\UniProjectMaterialDeletePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\UNI\Response\UniProjectMaterialDeletePostResponse::from($response->toArray());
    }
}