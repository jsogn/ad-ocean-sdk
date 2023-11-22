<?php

namespace AdOceanSdk\Majordomo\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 查询合作组织
 * @doc  https://open.oceanengine.com/labels/7/docs/1710414874245133
 */
class BusinessPlatformPartnerOrganizationListGetApi extends RequestApi
{
    protected string $address = 'open_api/2/business_platform/partner_organization/list/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Majordomo\Params\BusinessPlatformPartnerOrganizationListGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Majordomo\Response\BusinessPlatformPartnerOrganizationListGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Majordomo\Response\BusinessPlatformPartnerOrganizationListGetResponse::from($response->toArray());
    }
}