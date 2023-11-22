<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 模板标签列表
class CreativeTemplateListGetResponseListsTemplateTagsData extends Data
{

    /**
     * @var string $template_tag_id 模板标签ID
     */
    public string $template_tag_id;
    
    /**
     * @var string $template_tag_name 模板标签名称，e.g. "价格优惠"、"节日氛围"、"玩法吸引力"、"利益点露出"
     */
    public string $template_tag_name;
    
}