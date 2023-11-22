<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 模板填充的图片内容
class PromotionAutoGenerateConfigGetResponseTemplatesTemplateImgSchemaData extends Data
{

    /**
     * @var string $key 填充内容的键
     */
    public string $key;
    
    /**
     * @var string $value 填充内容的值
     */
    public string $value;
    
}