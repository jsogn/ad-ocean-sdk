<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取组织维度视频列表（ebp）NEW
 * @doc  https://open.oceanengine.com/labels/7/docs/1871578054932524?origin=left_nav
 */
class EbpMaterialListGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/ebp/material/list/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\EbpMaterialListGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\EbpMaterialListGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\EbpMaterialListGetResponse::from($response->toArray());
    }
}