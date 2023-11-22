<?php

namespace AdOceanSdk\DMP\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 数据源文件上传
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710568556544
 */
class DMPDataSourceFileUploadPostApi extends RequestApi
{
    protected string $address = 'open_api/2/dmp/data_source/file/upload/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\DMP\Params\DMPDataSourceFileUploadPostParams|RequestParamInterface|array $params = []): \AdOceanSdk\DMP\Response\DMPDataSourceFileUploadPostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\DMP\Response\DMPDataSourceFileUploadPostResponse::from($response->toArray());
    }
}