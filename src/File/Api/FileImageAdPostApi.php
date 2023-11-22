<?php

namespace AdOceanSdk\File\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 上传广告图片
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710600176640
 */
class FileImageAdPostApi extends RequestApi
{
    protected string $address = 'open_api/2/file/image/ad/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\File\Params\FileImageAdPostParams|RequestParamInterface|array $params = []): \AdOceanSdk\File\Response\FileImageAdPostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\File\Response\FileImageAdPostResponse::from($response->toArray());
    }
}