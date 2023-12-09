<?php

namespace AdOceanSdk\File\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestFormatEnum;
use AdOceanSdk\RequestMethodEnum;
use GuzzleHttp\Psr7\Utils;

/**
 * @desc 上传广告图片
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710600176640
 */
class FileImageAdPostApi extends RequestApi
{
    protected string $address = 'open_api/2/file/image/ad/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    protected ?RequestFormatEnum $requestFormat = RequestFormatEnum::MULTIPART;

    public function call(\AdOceanSdk\File\Params\FileImageAdPostParams|RequestParamInterface|array $params = []): \AdOceanSdk\File\Response\FileImageAdPostResponse
    {
        $params     = is_array($params) ? $params : $params->toArray();
        $formParams = [];

        foreach ($params as $key => $val) {
            if ($key === 'image_file') {
                $formParams[] = [
                    'name'     => $key,
                    'contents' => is_string($params['image_file']) ? Utils::tryFopen($params['image_file'], 'r') : $params['image_file'],
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

        return \AdOceanSdk\File\Response\FileImageAdPostResponse::from($response->toArray());
    }
}
