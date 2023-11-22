<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Params;

use AdOceanSdk\RequestParams;

class ProjectListGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告账户id
     */
    public int $advertiser_id;
    
    /**
     * @var string $fields 查询字段集合，如果指定则应答结果仅返回指定字段
     */
    public string $fields;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\ProjectListGetParamFilteringData $filtering 过滤条件，若此字段不传，或传空则视为无限制条件
     */
    public \AdOceanSdk\Advertising\Data\ProjectListGetParamFilteringData $filtering;
    
    /**
     * @var int $page 页数默认值：1，page范围为[1,99999]
     */
    public int $page;
    
    /**
     * @var int $page_size 页面大小默认值：10，page_size范围为[1,100]
     */
    public int $page_size;
    
}