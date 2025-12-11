<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class CreativeTemplateDetailGetGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Advertising\Data\CreativeTemplateDetailGetGetResponseTemplateTextSchemaData> $template_text_schema 模板填充的文本内容列表
     */
    public array $template_text_schema;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\CreativeTemplateDetailGetGetResponseTemplateImgSchemaData> $template_img_schema 模板填充的图片内容列表
     */
    public array $template_img_schema;
    
    /**
     * @var string $template_index 模板与素材的层级关系，分为FRONT前景模板和BACK背景模板，默认是背景模板，表示素材在模板的上层 可选值:
     */
    public string $template_index;
    
    /**
     * @var string $template_pos 模板与素材的位置关系，分为CETER居中和CUSTOM自定义 可选值:
     */
    public string $template_pos;
    
    /**
     * @var array<int> $template_pos_custom 当模板与素材的位置关系为自定义时，该值表示素材出现在模板中基于左上角[x,y]的坐标，单位为像素
     */
    public array $template_pos_custom;
    
}