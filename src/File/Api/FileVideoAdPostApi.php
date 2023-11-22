<?php

namespace AdOceanSdk\File\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 上传视频
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710600730639
 */
class FileVideoAdPostApi extends RequestApi
{
    protected string $address = 'open_api/2/file/video/ad/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\File\Params\FileVideoAdPostParams|RequestParamInterface|array $params = []): \AdOceanSdk\File\Response\FileVideoAdPostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\File\Response\FileVideoAdPostResponse::from($response->toArray());
    }
}