<?php

namespace AdOceanSdk\UNI\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 批量更新项目变现模式
 * @doc  https://open.oceanengine.com/labels/7/docs/1858725855069700
 */
class UniProjectMonetizationModePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/uni_project/monetization_mode/update/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\UNI\Params\UniProjectMonetizationModePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\UNI\Response\UniProjectMonetizationModePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\UNI\Response\UniProjectMonetizationModePostResponse::from($response->toArray());
    }
}