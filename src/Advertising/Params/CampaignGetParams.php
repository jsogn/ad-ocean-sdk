<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Params;

use AdOceanSdk\RequestParams;

class CampaignGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\CampaignGetParamFilteringData $filtering 过滤条件，若此字段不传，或传空则视为无限制条件
     */
    public \AdOceanSdk\Advertising\Data\CampaignGetParamFilteringData $filtering;
    
    /**
     * @var array<string> $fields 查询字段集合，如果指定，则返回结果数组中， 每个元素是包含所查询字段的字典；允许值:id、name、budget、budget_mode、landing_type、status、modify_time、campaign_modify_time、campaign_create_time
     */
    public array $fields;
    
    /**
     * @var int $page 当前页码:1
     */
    public int $page;
    
    /**
     * @var int $page_size 页面大小 默认值:10， 取值范围：1-1000
     */
    public int $page_size;
    
}