<?php

namespace AdOceanSdk\File\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取清理任务列表
 * @doc  https://open.oceanengine.com/labels/7/docs/1764210394714119
 */
class FileVideoMaterialClearTaskGetApi extends RequestApi
{
    protected string $address = 'open_api/2/file/video/material/clear_task/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\File\Params\FileVideoMaterialClearTaskGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\File\Response\FileVideoMaterialClearTaskGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\File\Response\FileVideoMaterialClearTaskGetResponse::from($response->toArray());
    }
}