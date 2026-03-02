<?php

namespace AdOceanSdk\DPA\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 查询短剧商品原片授权申请状态
 * @doc  https://open.oceanengine.com/labels/7/docs/1846199438930378?origin=left_nav
 */
class DpaEbpPlayletAuthGetGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/dpa/ebp/playlet/auth/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\DPA\Params\DpaEbpPlayletAuthGetGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\DPA\Response\DpaEbpPlayletAuthGetGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\DPA\Response\DpaEbpPlayletAuthGetGetResponse::from($response->toArray());
    }
}