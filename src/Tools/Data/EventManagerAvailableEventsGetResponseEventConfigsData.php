<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 可创建事件列表
class EventManagerAvailableEventsGetResponseEventConfigsData extends Data
{

    /**
     * @var int $event_id 事件ID
     */
    public int $event_id;
    
    /**
     * @var string $event_type 事件类型
     */
    public string $event_type;
    
    /**
     * @var string $event_cn_name 事件中文名称
     */
    public string $event_cn_name;
    
    /**
     * @var string $description 事件描述信息
     */
    public string $description;
    
    /**
     * @var array<string> $track_types 事件回传方式列表，枚举值：JSSDKJS埋码 、EXTERNAL_APIAPI回传 、XPATHXPath圈选
     */
    public array $track_types;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\EventManagerAvailableEventsGetResponseEventConfigsPropertiesData> $properties 事件的附加属性
     */
    public array $properties;
    
}