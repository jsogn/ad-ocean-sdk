<?php

namespace AdOceanSdk\File\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 批量删除图片素材
 * @doc  https://open.oceanengine.com/labels/7/docs/1761577471849479
 */
class FileImageDeletePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/file/image/delete/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\File\Params\FileImageDeletePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\File\Response\FileImageDeletePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\File\Response\FileImageDeletePostResponse::from($response->toArray());
    }
}