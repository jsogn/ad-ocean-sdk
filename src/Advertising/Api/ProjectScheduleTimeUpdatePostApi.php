<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 批量更新项目投放时间
 * @doc  https://open.oceanengine.com/labels/7/docs/1779258970970184
 */
class ProjectScheduleTimeUpdatePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/project/schedule_time/update/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Advertising\Params\ProjectScheduleTimeUpdatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\ProjectScheduleTimeUpdatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\ProjectScheduleTimeUpdatePostResponse::from($response->toArray());
    }
}