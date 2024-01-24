<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class SiteTemplateCreatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var int $site_id 站点ID，可通过【橙子建站】平台或【获取橙子建站站点列表】接口获取
     */
    public int $site_id;
    
    /**
     * @var string $template_name 模板名称，默认模版名称为原站点名词
     */
    public string $template_name;
    
}