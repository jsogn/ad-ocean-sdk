<?php

namespace AdOceanSdk\Majordomo\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取纵横组织下资产账户列表（分页）
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710520884224
 */
class CustomerCenterAdvertiserListGetApi extends RequestApi
{
    protected string $address = 'open_api/2/customer_center/advertiser/list/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Majordomo\Params\CustomerCenterAdvertiserListGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Majordomo\Response\CustomerCenterAdvertiserListGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Majordomo\Response\CustomerCenterAdvertiserListGetResponse::from($response->toArray());
    }
}