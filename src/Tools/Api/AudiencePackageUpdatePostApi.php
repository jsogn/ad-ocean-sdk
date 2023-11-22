<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 更新定向包
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710732349455
 */
class AudiencePackageUpdatePostApi extends RequestApi
{
    protected string $address = 'open_api/2/audience_package/update/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\AudiencePackageUpdatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\AudiencePackageUpdatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\AudiencePackageUpdatePostResponse::from($response->toArray());
    }
}