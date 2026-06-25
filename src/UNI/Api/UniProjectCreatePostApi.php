<?php

namespace AdOceanSdk\UNI\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 新建全域投放项目
 * @doc  https://open.oceanengine.com/labels/7/docs/1854206019149016
 */
class UniProjectCreatePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/uni_project/create/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\UNI\Params\UniProjectCreatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\UNI\Response\UniProjectCreatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\UNI\Response\UniProjectCreatePostResponse::from($response->toArray());
    }
}