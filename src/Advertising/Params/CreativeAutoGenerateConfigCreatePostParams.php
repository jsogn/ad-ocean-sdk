<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Params;

use AdOceanSdk\RequestParams;

class CreativeAutoGenerateConfigCreatePostParams extends RequestParams
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
     * @var int $config_id 配置ID，新建时不传入、修改时必传
     */
    public int $config_id;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\CreativeAutoGenerateConfigCreatePostParamTemplatesData> $templates 模板列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\CreativeAutoGenerateConfigCreatePostParamTemplatesData::class)]
    public array $templates;
    
    /**
     * @var string $select_template_mode 模版选择的方式，使用系统匹配的模版或者自定义模版，选择系统自动匹配模版不需要传模版，选择自定义模版需要传模版 可选值:
     */
    public string $select_template_mode;
    
}