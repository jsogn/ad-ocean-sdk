<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 模板列表(仅当version=Template时有值)
class PromotionAutoGenerateConfigGetResponseTemplatesData extends Data
{

    /**
     * @var int $template_id 模板ID
     */
    public int $template_id;
    
    /**
     * @var string $template_type 模板类型 可选值:
     */
    public string $template_type;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionAutoGenerateConfigGetResponseTemplatesTemplateTextSchemaData> $template_text_schema 模板填充的文本内容
     */
    public array $template_text_schema;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionAutoGenerateConfigGetResponseTemplatesTemplateImgSchemaData> $template_img_schema 模板填充的图片内容
     */
    public array $template_img_schema;
    
}