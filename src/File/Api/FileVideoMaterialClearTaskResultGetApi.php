<?php

namespace AdOceanSdk\File\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 下载清理任务结果
 * @doc  https://open.oceanengine.com/labels/7/docs/1764216974179400
 */
class FileVideoMaterialClearTaskResultGetApi extends RequestApi
{
    protected string $address = 'open_api/2/file/video/material/clear_task_result/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\File\Params\FileVideoMaterialClearTaskResultGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\File\Response\FileVideoMaterialClearTaskResultGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\File\Response\FileVideoMaterialClearTaskResultGetResponse::from($response->toArray());
    }
}