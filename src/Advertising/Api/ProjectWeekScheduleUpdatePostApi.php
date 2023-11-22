<?php

namespace AdOceanSdk\Advertising\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 批量更新项目投放时段
 * @doc  https://open.oceanengine.com/labels/7/docs/1779260654537728
 */
class ProjectWeekScheduleUpdatePostApi extends RequestApi
{
    protected string $address = 'open_api/v3.0/project/week_schedule/update/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Advertising\Params\ProjectWeekScheduleUpdatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Advertising\Response\ProjectWeekScheduleUpdatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Advertising\Response\ProjectWeekScheduleUpdatePostResponse::from($response->toArray());
    }
}