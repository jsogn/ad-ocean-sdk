<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsLandingGroupCreatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主id，范围：1 <= advertiser_id <=MAX_INT64
     */
    public int $advertiser_id;
    
    /**
     * @var string $group_title 落地页组名称，范围：1 <= 长度 <= 20
     */
    public string $group_title;
    
    /**
     * @var string $group_flow_type 流量分配方式。详见：【附录-枚举值-落地页组流量分配方式】
     */
    public string $group_flow_type;
    
    /**
     * @var array<string> $site_ids 橙子建站站点id列表 ：2 <= 长度 <= 10可通过【获取橙子建站站点列表】获取应答字段list
     */
    public array $site_ids;
    
    /**
     * @var string $experiment_site_type 落地页类型，OWN：橙子建站落地页，THIRD_PARTY：自有落地页 可选值:OWN: 橙子建站落地页THIRD_PARTY: 自有落地页
     */
    public string $experiment_site_type;
    
}