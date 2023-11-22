<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 事件的附加属性
class EventManagerAvailableEventsGetResponseEventConfigsPropertiesData extends Data
{

    /**
     * @var string $field 附加属性英文名称
     */
    public string $field;
    
    /**
     * @var string $field_name 附加属性中文名称
     */
    public string $field_name;
    
    /**
     * @var string $variable_type 附加属性值类型
     */
    public string $variable_type;
    
    /**
     * @var dict[string] $enum_value 附加属性枚举值
     */
    public dict[string] $enum_value;
    
    /**
     * @var string $unit 附加属性单位
     */
    public string $unit;
    
    /**
     * @var string $description 附加属性描述
     */
    public string $description;
    
}