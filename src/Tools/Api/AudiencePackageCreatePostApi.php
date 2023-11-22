<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 创建定向包
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710735901711
 */
class AudiencePackageCreatePostApi extends RequestApi
{
    protected string $address = 'open_api/2/audience_package/create/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\AudiencePackageCreatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\AudiencePackageCreatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\AudiencePackageCreatePostResponse::from($response->toArray());
    }
}