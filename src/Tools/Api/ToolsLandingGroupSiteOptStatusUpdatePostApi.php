<?php

namespace AdOceanSdk\Tools\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 更新落地页组站点状态
 * @doc  https://open.oceanengine.com/labels/7/docs/1696710629600256
 */
class ToolsLandingGroupSiteOptStatusUpdatePostApi extends RequestApi
{
    protected string $address = 'open_api/2/tools/landing_group/site_opt_status/update/';

    protected RequestMethodEnum $method = RequestMethodEnum::POST;

    public function call(\AdOceanSdk\Tools\Params\ToolsLandingGroupSiteOptStatusUpdatePostParams|RequestParamInterface|array $params = []): \AdOceanSdk\Tools\Response\ToolsLandingGroupSiteOptStatusUpdatePostResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\Tools\Response\ToolsLandingGroupSiteOptStatusUpdatePostResponse::from($response->toArray());
    }
}