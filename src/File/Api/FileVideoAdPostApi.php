<?php

namespace AdOceanSdk\File\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestFormatEnum;
use AdOceanSdk\RequestMethodEnum;
use GuzzleHttp\Psr7\Utils;

/**
 * @desc 上传视频
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710600730639
 */
class FileVideoAdPostApi extends RequestApi
{
    protected string $address = 'open_api/2/file/video/ad/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    protected ?RequestFormatEnum $requestFormat = RequestFormatEnum::MULTIPART;

    public function call(\AdOceanSdk\File\Params\FileVideoAdPostParams|RequestParamInterface|array $params = []): \AdOceanSdk\File\Response\FileVideoAdPostResponse
    {
        $params     = is_array($params) ? $params : $params->toArray();
        $formParams = [];

        foreach ($params as $key => $val) {
            if ($key === 'video_file') {
                $formParams[] = [
                    'name'     => $key,
                    'contents' => is_string($params['video_file']) ? Utils::tryFopen($params['video_file'], 'r') : $params['video_file'],
                    'filename' => $params['filename'] ?? '',
                ];
            } else {
                $formParams[] = [
                    'name'     => $key,
                    'contents' => $val
                ];
            }
        }

        $response = parent::call($formParams);

        return \AdOceanSdk\File\Response\FileVideoAdPostResponse::from($response->toArray());
    }
}