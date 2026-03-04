<?php

namespace AdOceanSdk\EBP\Api;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc 下载获取升级版巨量引擎工作台账户任务结果
 * @doc  https://open.oceanengine.com/labels/7/docs/1829552986209882?origin=left_nav
 */
class EbpAdvertiserTaskDownloadGetApi extends RequestApi
{
    protected string $address = 'open_api/2/ebp/advertiser/task/download/';

    protected RequestMethodEnum $method = RequestMethodEnum::GET;

    public function call(\AdOceanSdk\EBP\Params\EbpAdvertiserTaskDownloadGetParams|RequestParamInterface|array $params = []): \AdOceanSdk\EBP\Response\EbpAdvertiserTaskDownloadGetResponse
    {
        $response = parent::call($params);

        return \AdOceanSdk\EBP\Response\EbpAdvertiserTaskDownloadGetResponse::from($response->toArray());
    }
}