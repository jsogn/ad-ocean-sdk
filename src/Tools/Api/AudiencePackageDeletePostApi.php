<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 删除定向包
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710732991488
 */
class AudiencePackageDeletePostApi extends RequestApi
{
    protected string $address = 'open_api/2/audience_package/delete/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\AudiencePackageDeletePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\AudiencePackageDeletePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\AudiencePackageDeletePostResponse::from($response->toArray());
    }
}