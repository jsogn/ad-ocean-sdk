<?php

namespace AdOceanSdk\File\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取视频素材
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710601820172
 */
class FileVideoGetApi extends RequestApi
{
    protected string $address = 'open_api/2/file/video/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\File\Params\FileVideoGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\File\Response\FileVideoGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\File\Response\FileVideoGetResponse::from($response->toArray());
    }
}