<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 模板填充的文本内容列表
class AdvertiserCreativeTemplateDetailGetGetResponseTemplateTextSchemaData extends Data
{

    /**
     * @var string $key 填充内容的键
     */
    public string $key;
    
    /**
     * @var string $name 填充内容的名称，e.g. 卖点主文本、卖点副文本
     */
    public string $name;
    
    /**
     * @var string $value 默认填充内容的值（文本类型的填充值为文字）
     */
    public string $value;
    
    /**
     * @var int $text_max_length 文本的字符最长长度
     */
    public int $text_max_length;
    
    /**
     * @var int $text_min_length 文本的字符最小长度
     */
    public int $text_min_length;
    
}