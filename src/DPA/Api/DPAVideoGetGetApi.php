<?php

namespace AdOceanSdk\DPA\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取 DPA 商品库视频模板
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710582303744
 */
class DPAVideoGetGetApi extends RequestApi
{
    protected string $address = 'open_api/2/dpa/video/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\DPA\Params\DPAVideoGetGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\DPA\Response\DPAVideoGetGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\DPA\Response\DPAVideoGetGetResponse::from($response->toArray());
    }
}