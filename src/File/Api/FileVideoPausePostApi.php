<?php

namespace AdOceanSdk\File\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 批量暂停素材
 * @doc  https://open.oceanengine.com/labels/7/docs/1779985717273613
 */
class FileVideoPausePostApi extends RequestApi
{
    protected string $address = 'open_api/2/file/video/pause/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\File\Params\FileVideoPausePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\File\Response\FileVideoPausePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\File\Response\FileVideoPausePostResponse::from($response->toArray());
    }
}