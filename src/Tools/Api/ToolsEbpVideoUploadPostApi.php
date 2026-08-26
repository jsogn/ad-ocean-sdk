<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestFormatEnum;
use AdOceanSdk\RequestMethodEnum;
use GuzzleHttp\Psr7\Utils;

/**
 * @desc 升级版工作台上传视频
 * @doc  https://open.oceanengine.com/labels/7/docs/1855448450527623?origin=left_nav
 */
class ToolsEbpVideoUploadPostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/ebp/video/upload/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    protected ?RequestFormatEnum $requestFormat = RequestFormatEnum::MULTIPART;

    public function call(\AdOceanSdk\Tools\Params\ToolsEbpVideoUploadPostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsEbpVideoUploadPostResponse
    {
        // 文件上传接口必须用 multipart 格式；数组/Params 统一转为 Guzzle multipart 数组结构
        $params = is_array($params) ? $params : $params->toArray();
        $formParams = [];

        foreach ($params as $key => $val) {
            if ($key === 'video_file') {
                $formParams[] = [
                    'name'     => $key,
                    'contents' => is_string($val) ? Utils::tryFopen($val, 'r') : $val,
                    'filename' => $params['file_name'] ?? '',
                ];
            } else {
                $formParams[] = [
                    'name'     => $key,
                    'contents' => $val,
                ];
            }
        }

        $response = parent::call($formParams);

        return \AdOceanSdk\Tools\Response\ToolsEbpVideoUploadPostResponse::from($response->toArray());
    }
}