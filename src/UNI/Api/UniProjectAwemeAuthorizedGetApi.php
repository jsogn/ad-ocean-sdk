<?php

namespace AdOceanSdk\UNI\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取全域创编可用抖音号
 * @doc  https://open.oceanengine.com/labels/7/docs/1854930373174281
 */
class UniProjectAwemeAuthorizedGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/uni_project/aweme/authorized/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\UNI\Params\UniProjectAwemeAuthorizedGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\UNI\Response\UniProjectAwemeAuthorizedGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\UNI\Response\UniProjectAwemeAuthorizedGetResponse::from($response->toArray());
    }
}