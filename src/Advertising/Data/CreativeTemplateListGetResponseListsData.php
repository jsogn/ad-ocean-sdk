<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 模版列表
class CreativeTemplateListGetResponseListsData extends Data
{

    /**
     * @var int $template_id 模板ID
     */
    public int $template_id;
    
    /**
     * @var string $template_name 模板名称
     */
    public string $template_name;
    
    /**
     * @var string $template_type 模板类型，枚举值 可选值:
     */
    public string $template_type;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\CreativeTemplateListGetResponseListsTemplateTagsData> $template_tags 模板标签列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\CreativeTemplateListGetResponseListsTemplateTagsData::class)]
    public array $template_tags;
    
    /**
     * @var string $image_mode 生成素材样式，返回值:
     */
    public string $image_mode;
    
    /**
     * @var string $preview_url 模板预览链接
     */
    public string $preview_url;
    
    /**
     * @var string $cover_url 模板的封面图
     */
    public string $cover_url;
    
    /**
     * @var string $template_desc 模板描述，用以说明例如"这个模板需要计划下自提素材中含有竖版视频才可用"等必要说明信息
     */
    public string $template_desc;
    
}