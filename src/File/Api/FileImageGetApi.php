<?php

namespace AdOceanSdk\File\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestFormatEnum;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取图片素材
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710601254912
 */
class FileImageGetApi extends RequestApi
{
    protected string $address = 'open_api/2/file/image/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    protected ?RequestFormatEnum $requestFormat = RequestFormatEnum::JSON;

    public function call(\AdOceanSdk\File\Params\FileImageGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\File\Response\FileImageGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\File\Response\FileImageGetResponse::from($response->toArray());
    }
}