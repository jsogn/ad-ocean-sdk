<?php

namespace AdOceanSdk\File\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取素材标签列表
 * @doc  https://open.oceanengine.com/labels/7/docs/1761499216182279
 */
class FileMaterialListGetApi extends RequestApi
{
    protected string $address = 'open_api/2/file/material/list/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\File\Params\FileMaterialListGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\File\Response\FileMaterialListGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\File\Response\FileMaterialListGetResponse::from($response->toArray());
    }
}