<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class SiteTemplateSiteCreatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var int $site_id 站点ID，未填充时会创建新的站点。填充时，会对当前站点的落地页进行修改，可通过【橙子建站】平台或【获取橙子建站站点列表】接口获取
     */
    public int $site_id;
    
    /**
     * @var int $template_id 模板ID，可通过【获取站点模版列表】查询模板ID
     */
    public int $template_id;
    
    /**
     * @var string $name 站点名称，范围：长度 >=1
     */
    public string $name;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksData> $bricks 组件列表，可按需填充部分组件，未填充部分会使用原模板内容。
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\SiteTemplateSiteCreatePostParamBricksData::class)]
    public array $bricks;
    
}