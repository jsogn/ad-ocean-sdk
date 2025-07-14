<?php

namespace AdOceanSdk\Fund\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @deprecated 已被废弃，无法使用
 * @desc 获取可转账户列表（客户中心&广告主）
 * @doc  https://open.oceanengine.com/labels/7/docs/1758605359659008
 */
class CustomerCenterAdvertiserTransferableListGetApi extends RequestApi
{
    protected string $address = 'open_api/2/customer_center/advertiser/transferable/list/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Fund\Params\CustomerCenterAdvertiserTransferableListGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Fund\Response\CustomerCenterAdvertiserTransferableListGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Fund\Response\CustomerCenterAdvertiserTransferableListGetResponse::from($response->toArray());
    }
}