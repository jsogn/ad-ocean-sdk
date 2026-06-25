<?php

namespace AdOceanSdk\UNI\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 编辑全域投放项目
 * @doc  https://open.oceanengine.com/labels/7/docs/1854910852321354
 */
class UniProjectUpdatePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/uni_project/update/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\UNI\Params\UniProjectUpdatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\UNI\Response\UniProjectUpdatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\UNI\Response\UniProjectUpdatePostResponse::from($response->toArray());
    }
}