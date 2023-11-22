<?php

namespace AdOceanSdk\File\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取低效素材
 * @doc  https://open.oceanengine.com/labels/7/docs/1733880964883467
 */
class FileVideoEfficiencyGetApi extends RequestApi
{
    protected string $address = 'open_api/2/file/video/efficiency/get/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\File\Params\FileVideoEfficiencyGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\File\Response\FileVideoEfficiencyGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\File\Response\FileVideoEfficiencyGetResponse::from($response->toArray());
    }
}