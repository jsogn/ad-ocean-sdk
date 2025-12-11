<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class SiteTemplateCreatePostResponseData extends Data
{

    /**
     * @var int $template_id 模板ID
     */
    public int $template_id;
    
    /**
     * @var int $site_id 站点ID，可通过【橙子建站】平台或【获取橙子建站站点列表】接口获取
     */
    public int $site_id;
    
    /**
     * @var string $template_name 模板名称
     */
    public string $template_name;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\SiteTemplateCreatePostResponseBricksData> $bricks 组件列表
     */
    public array $bricks;
    
}