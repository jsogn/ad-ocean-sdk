<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 获取组织认证及授权主体列表NEW
 * @doc  https://open.oceanengine.com/labels/7/docs/1855089467521035?origin=left_nav
 */
class ToolsEbpSubjectListGetApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/tools/ebp/subject/list/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\Tools\Params\ToolsEbpSubjectListGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsEbpSubjectListGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsEbpSubjectListGetResponse::from($response->toArray());
    }
}