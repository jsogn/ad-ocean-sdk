<?php

namespace AdOceanSdk\DPA\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取DPA分类
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710580168716
 */
class DPACategoryGetGetApi extends RequestApi
{
    protected string $address = 'open_api/2/dpa/category/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\DPA\Params\DPACategoryGetGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\DPA\Response\DPACategoryGetGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\DPA\Response\DPACategoryGetGetResponse::from($response->toArray());
    }
}