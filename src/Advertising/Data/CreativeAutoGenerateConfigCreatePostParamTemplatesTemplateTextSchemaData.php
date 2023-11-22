<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 模板填充的文本内容，不填写则表示使用默认填充值
class CreativeAutoGenerateConfigCreatePostParamTemplatesTemplateTextSchemaData extends Data
{

    /**
     * @var string $key 填充内容的键
     */
    public string $key;
    
    /**
     * @var string $value 填充内容的值（文本类型的填充值为文字）
     */
    public string $value;
    
}