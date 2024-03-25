<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class DPAMetaGetGetResponseListData extends Data
{

    /**
     * @var int $status 元信息状态
     */
    public int $status;
    
    /**
     * @var string $name 元信息名称
     */
    public string $name;
    
    /**
     * @var string $title 元信息头
     */
    public string $title;
    
    /**
     * @var int $media_type 元信息媒体类型
     */
    public int $media_type;
    
    /**
     * @var string $field_group 分组
     */
    public string $field_group;
    
    /**
     * @var string $type 字段类型
     */
    public string $type;
    
}