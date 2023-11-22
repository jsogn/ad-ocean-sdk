<?php

namespace AdOceanSdk\File\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 【代理商】明点无效素材查询
 * @doc  https://open.oceanengine.com/labels/7/docs/1779971491239040
 */
class FileRebateMaterialSearchGetApi extends RequestApi
{
    protected string $address = 'open_api/2/file/rebate/material_search/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\File\Params\FileRebateMaterialSearchGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\File\Response\FileRebateMaterialSearchGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\File\Response\FileRebateMaterialSearchGetResponse::from($response->toArray());
    }
}