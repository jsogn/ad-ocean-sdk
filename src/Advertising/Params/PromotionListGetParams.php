<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Params;

use AdOceanSdk\RequestParams;

class PromotionListGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告账户id
     */
    public int $advertiser_id;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\PromotionListGetParamFilteringData $filtering 过滤条件
     */
    public \AdOceanSdk\Advertising\Data\PromotionListGetParamFilteringData $filtering;
    
    /**
     * @var array<string> $fields 查询字段集合，如果指定则应答结果仅返回指定字段可参考应答参数返回的指标字段
     */
    public array $fields;
    
    /**
     * @var int $page 页数默认值：1，page范围为[1,99999]
     */
    public int $page;
    
    /**
     * @var int $page_size 页面大小默认值：10，page_size范围为[1,20]
     */
    public int $page_size;
    
}