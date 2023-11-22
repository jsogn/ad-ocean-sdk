<?php

namespace AdOceanSdk\File\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 上传图文内的音频素材
 * @doc  https://open.oceanengine.com/labels/7/docs/1780005237921792
 */
class FileAudioAdPostApi extends RequestApi
{
    protected string $address = 'open_api/2/file/audio/ad/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\File\Params\FileAudioAdPostParams|RequestParamInterface|array $params = []): \AdOceanSdk\File\Response\FileAudioAdPostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\File\Response\FileAudioAdPostResponse::from($response->toArray());
    }
}