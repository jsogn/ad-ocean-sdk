<?php

namespace AdOceanSdk\File\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取异步上传视频文件结果
 * @doc  https://open.oceanengine.com/labels/7/docs/1801544428603604?origin=left_nav
 */
class FileVideoUploadTaskListGetApi extends RequestApi
{
    protected string $address = 'open_api/2/file/video/upload_task/list/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\File\Params\FileVideoUploadTaskListGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\File\Response\FileVideoUploadTaskListGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\File\Response\FileVideoUploadTaskListGetResponse::from($response->toArray());
    }
}