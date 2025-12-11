<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 已创建事件列表
class EventManagerEventConfigsGetResponseEventConfigsData extends Data
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
     * @var \AdOceanSdk\Tools\Data\EventManagerEventConfigsGetResponseEventConfigsAttributionConfigurationData $attribution_configuration 属性配置
     */
    public \AdOceanSdk\Tools\Data\EventManagerEventConfigsGetResponseEventConfigsAttributionConfigurationData $attribution_configuration;

    /**
     * @var string $debugging_status 激活免联调状态，枚举值：Active已激活、Inactive未激活
     */
    public string $debugging_status;

    /**
     * @var array<string> $track_types 事件回传方式列表，允许值:落地页支持:JSSDKJS埋码 、EXTERNAL_APIAPI回传、XPATHXPath圈选应用支持：APPLICATION_API应用API、APPLICATION_SDK应用SDK、快应用支持：QUICK_APP_API快应用API
     */
    public array $track_types;

    /**
     * @var string $create_time 事件创建时间
     */
    public string $create_time;

    /**
     * @var array<\AdOceanSdk\Tools\Data\EventManagerEventConfigsGetResponseEventConfigsPropertiesData> $properties 事件的附加属性
     */
    public ?array $properties;

}