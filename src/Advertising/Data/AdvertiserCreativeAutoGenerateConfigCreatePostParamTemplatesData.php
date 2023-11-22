<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 模板列表
class AdvertiserCreativeAutoGenerateConfigCreatePostParamTemplatesData extends Data
{

    /**
     * @var int $template_id 模板ID
     */
    public int $template_id;
    
    /**
     * @var string $template_type 模版类型 可选值:
     */
    public string $template_type;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\AdvertiserCreativeAutoGenerateConfigCreatePostParamTemplatesTemplateTextSchemaData> $template_text_schema 模板填充的文本内容，不填写则表示使用默认填充值
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\AdvertiserCreativeAutoGenerateConfigCreatePostParamTemplatesTemplateTextSchemaData::class)]
    public array $template_text_schema;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\AdvertiserCreativeAutoGenerateConfigCreatePostParamTemplatesTemplateImgSchemaData> $template_img_schema 模板填充的图片内容，不填写则表示使用默认填充值
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\AdvertiserCreativeAutoGenerateConfigCreatePostParamTemplatesTemplateImgSchemaData::class)]
    public array $template_img_schema;
    
}