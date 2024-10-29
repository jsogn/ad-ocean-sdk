<?php

namespace AdOceanSdk\File\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取视频素材评估标签（新版）
 * @doc  https://open.oceanengine.com/labels/7/docs/1789500809829388
 */
class FileMaterialAttributesListGetApi extends RequestApi
{
    protected string $address = 'open_api/2/file/material_attributes/list/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\File\Params\FileMaterialAttributesListGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\File\Response\FileMaterialAttributesListGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\File\Response\FileMaterialAttributesListGetResponse::from($response->toArray());
    }
}