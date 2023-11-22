<?php

namespace AdOceanSdk\File\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 更新视频
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710605909004
 */
class FileVideoUpdatePostApi extends RequestApi
{
    protected string $address = 'open_api/2/file/video/update/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\File\Params\FileVideoUpdatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\File\Response\FileVideoUpdatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\File\Response\FileVideoUpdatePostResponse::from($response->toArray());
    }
}