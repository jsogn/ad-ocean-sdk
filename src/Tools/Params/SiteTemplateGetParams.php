<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class SiteTemplateGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主
     */
    public int $advertiser_id;
    
    /**
     * @var object $filter 过滤条件
     */
    public object $filter;
    
    /**
     * @var array<int> $template_ids 模板ID数组，数量限制100
     */
    public array $template_ids;
    
    /**
     * @var array<int> $site_ids 站点ID，可通过【橙子建站】平台或【获取橙子建站站点列表】获取
     */
    public array $site_ids;
    
    /**
     * @var string $keyword_of_name 模板名称关键词
     */
    public string $keyword_of_name;
    
    /**
     * @var int $page 页码，默认值是1，范围page >=1
     */
    public int $page;
    
    /**
     * @var int $page_size 页面大小，默认值是20，范围1~100
     */
    public int $page_size;
    
}