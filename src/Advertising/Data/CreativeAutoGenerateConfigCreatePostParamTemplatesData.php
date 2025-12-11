<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 模板列表
class CreativeAutoGenerateConfigCreatePostParamTemplatesData extends Data
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
     * @var array<\AdOceanSdk\Advertising\Data\CreativeAutoGenerateConfigCreatePostParamTemplatesTemplateTextSchemaData> $template_text_schema 模板填充的文本内容，不填写则表示使用默认填充值
     */
    public array $template_text_schema;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\CreativeAutoGenerateConfigCreatePostParamTemplatesTemplateImgSchemaData> $template_img_schema 模板填充的图片内容，不填写则表示使用默认填充值
     */
    public array $template_img_schema;
    
}