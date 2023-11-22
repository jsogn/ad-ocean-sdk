<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取定向包
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710731761676
 */
class AudiencePackageGetApi extends RequestApi
{
    protected string $address = 'open_api/2/audience_package/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\AudiencePackageGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\AudiencePackageGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\AudiencePackageGetResponse::from($response->toArray());
    }
}