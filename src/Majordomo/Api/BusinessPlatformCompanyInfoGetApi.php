<?php

namespace AdOceanSdk\Majordomo\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取纵横组织下所有主体信息
 * @doc  https://open.oceanengine.com/labels/7/docs/1741478619724813
 */
class BusinessPlatformCompanyInfoGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/business_platform/company_info/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Majordomo\Params\BusinessPlatformCompanyInfoGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Majordomo\Response\BusinessPlatformCompanyInfoGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Majordomo\Response\BusinessPlatformCompanyInfoGetResponse::from($response->toArray());
    }
}