<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 模板填充的图片内容列表
class CreativeTemplateDetailGetGetResponseTemplateImgSchemaData extends Data
{

    /**
     * @var string $key 填充内容的键
     */
    public string $key;
    
    /**
     * @var string $name 填充内容的名称，e.g. 背景图
     */
    public string $name;
    
    /**
     * @var string $value 默认填充内容的值（图片类型的填充值为图片url）
     */
    public string $value;
    
    /**
     * @var int $img_width 图片建议的大于等于的宽度
     */
    public int $img_width;
    
    /**
     * @var int $img_height 图片建议的大于等于的高度
     */
    public int $img_height;
    
}