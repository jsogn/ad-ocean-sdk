<?php

namespace AdOceanSdk\File\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取抖音主页视频
 * @doc  https://open.oceanengine.com/labels/7/docs/1729982871844879
 */
class FileVideoAwemeGetApi extends RequestApi
{
    protected string $address = 'open_api/2/file/video/aweme/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\File\Params\FileVideoAwemeGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\File\Response\FileVideoAwemeGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\File\Response\FileVideoAwemeGetResponse::from($response->toArray());
    }
}