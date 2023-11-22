<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取同主体下广告主图片素材
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710602952719
 */
class FileImageAdGetApi extends RequestApi
{
    protected string $address = 'open_api/2/file/image/ad/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\FileImageAdGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\FileImageAdGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\FileImageAdGetResponse::from($response->toArray());
    }
}