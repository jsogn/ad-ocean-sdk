<?php

namespace AdOceanSdk\File\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 查询素材标签信息
 * @doc  https://open.oceanengine.com/labels/7/docs/1763768835703812
 */
class FileMaterialDetailGetApi extends RequestApi
{
    protected string $address = 'open_api/2/file/material/detail/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\File\Params\FileMaterialDetailGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\File\Response\FileMaterialDetailGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\File\Response\FileMaterialDetailGetResponse::from($response->toArray());
    }
}