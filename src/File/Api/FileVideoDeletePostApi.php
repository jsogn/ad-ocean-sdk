<?php

namespace AdOceanSdk\File\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 批量删除视频素材
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710605373455
 */
class FileVideoDeletePostApi extends RequestApi
{
    protected string $address = 'open_api/2/file/video/delete/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\File\Params\FileVideoDeletePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\File\Response\FileVideoDeletePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\File\Response\FileVideoDeletePostResponse::from($response->toArray());
    }
}