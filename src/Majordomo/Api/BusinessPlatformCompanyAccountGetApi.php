<?php

namespace AdOceanSdk\Majordomo\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取主体下的账户列表
 * @doc  https://open.oceanengine.com/labels/7/docs/1741479196149775
 */
class BusinessPlatformCompanyAccountGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/business_platform/company_account/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Majordomo\Params\BusinessPlatformCompanyAccountGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Majordomo\Response\BusinessPlatformCompanyAccountGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Majordomo\Response\BusinessPlatformCompanyAccountGetResponse::from($response->toArray());
    }
}