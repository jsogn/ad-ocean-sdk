<?php

namespace AdOceanSdk\File\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 创建素材清理任务
 * @doc  https://open.oceanengine.com/labels/7/docs/1764209655140366
 */
class FileVideoMaterialClearTaskCreatePostApi extends RequestApi
{
    protected string $address = 'open_api/2/file/video/material/clear_task/create/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\File\Params\FileVideoMaterialClearTaskCreatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\File\Response\FileVideoMaterialClearTaskCreatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\File\Response\FileVideoMaterialClearTaskCreatePostResponse::from($response->toArray());
    }
}