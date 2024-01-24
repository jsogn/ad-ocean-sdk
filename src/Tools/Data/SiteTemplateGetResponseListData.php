<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 模板列表
class SiteTemplateGetResponseListData extends Data
{

    /**
     * @var int $site_id 站点ID，可通过【橙子建站】平台或【获取橙子建站站点列表】获取
     */
    public int $site_id;
    
    /**
     * @var int $template_id 模板ID
     */
    public int $template_id;
    
    /**
     * @var string $template_name 模板名称
     */
    public string $template_name;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\SiteTemplateGetResponseListBricksData> $bricks 组件列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\SiteTemplateGetResponseListBricksData::class)]
    public array $bricks;
    
}