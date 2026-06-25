<?php

namespace AdOceanSdk\UNI\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取全域投放项目列表
 * @doc  https://open.oceanengine.com/labels/7/docs/1854926110406984
 */
class UniProjectListGetGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/uni_project_list/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\UNI\Params\UniProjectListGetGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\UNI\Response\UniProjectListGetGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\UNI\Response\UniProjectListGetGetResponse::from($response->toArray());
    }
}