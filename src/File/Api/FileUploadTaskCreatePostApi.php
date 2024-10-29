<?php

namespace AdOceanSdk\File\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 异步上传视频文件
 * @doc  https://open.oceanengine.com/labels/7/docs/1801533703648324?origin=left_nav
 */
class FileUploadTaskCreatePostApi extends RequestApi
{
    protected string $address = 'open_api/2/file/upload_task/create/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\File\Params\FileUploadTaskCreatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\File\Response\FileUploadTaskCreatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\File\Response\FileUploadTaskCreatePostResponse::from($response->toArray());
    }
}