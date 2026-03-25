<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 批量修改项目ROI系数
 * @doc  https://open.oceanengine.com/labels/34/docs/1794208148473859?origin=left_nav
 */
class ProjectRoigoalUpdatePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/project/roigoal/update/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Advertising\Params\ProjectRoigoalUpdatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\ProjectRoigoalUpdatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\ProjectRoigoalUpdatePostResponse::from($response->toArray());
    }
}