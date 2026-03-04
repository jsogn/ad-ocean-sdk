<?php

namespace AdOceanSdk\EBP\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取升级版巨量引擎工作台下账户列表
 * @doc  https://open.oceanengine.com/labels/7/docs/1829550825614739?origin=left_nav
 */
class EbpAdvertiserListGetApi extends RequestApi
{
    protected string $address = 'open_api/2/ebp/advertiser/list/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\EBP\Params\EbpAdvertiserListGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\EBP\Response\EbpAdvertiserListGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\EBP\Response\EbpAdvertiserListGetResponse::from($response->toArray());
    }
}