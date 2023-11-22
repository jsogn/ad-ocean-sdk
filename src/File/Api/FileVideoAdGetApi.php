<?php

namespace AdOceanSdk\File\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取同主体下广告主视频素材
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710603509772
 */
class FileVideoAdGetApi extends RequestApi
{
    protected string $address = 'open_api/2/file/video/ad/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\File\Params\FileVideoAdGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\File\Response\FileVideoAdGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\File\Response\FileVideoAdGetResponse::from($response->toArray());
    }
}