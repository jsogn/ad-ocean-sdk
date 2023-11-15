<?php

namespace AdOceanSdk\Account\Advertiser\Params;

use AdOceanSdk\RequestParams;

class AdvertiserInfoGetParams extends RequestParams
{
    /**
     * @var array<int> 广告主ID集合
     */
    public array $advertiser_ids;

    /**
     * @var array<string> 查询字段集合, 默认:查询所有
     */
    public ?array $fields;
}