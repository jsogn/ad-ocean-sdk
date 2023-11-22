<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 模板填充的图片内容，不填写则表示使用默认填充值
class CreativeAutoGenerateConfigCreatePostParamTemplatesTemplateImgSchemaData extends Data
{

    /**
     * @var string $key 填充内容的键
     */
    public string $key;
    
    /**
     * @var string $value 填充内容的值（图片类型的填充值为url）
     */
    public string $value;
    
}