<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Params;

use AdOceanSdk\RequestParams;

class CreativeTemplateListGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var int $ad_id 广告计划ID
     */
    public int $ad_id;
    
    /**
     * @var string $image_mode 生成素材样式，允许值：
     */
    public string $image_mode;
    
    /**
     * @var array<string> $template_tag_ids 模板标签ID，通过【获取模板标签列表】接口获取
     */
    public array $template_tag_ids;
    
    /**
     * @var int $page 页数，默认值：1
     */
    public int $page;
    
    /**
     * @var int $page_size 页面大小，默认值：10
     */
    public int $page_size;
    
}