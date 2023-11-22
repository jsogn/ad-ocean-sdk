<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 保存成功的模板列表
class CreativeAutoGenerateConfigCreatePostResponseTemplatesData extends Data
{

    /**
     * @var int $template_id 模板ID
     */
    public int $template_id;
    
    /**
     * @var string $template_type 模板样式 可选值:
     */
    public string $template_type;
    
}