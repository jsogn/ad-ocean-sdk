<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 日志详情
class ToolsLogSearchGetResponseLogsData extends Data
{

    /**
     * @var string $content_title 操作内容
     */
    public string $content_title;
    
    /**
     * @var string $object_type 操作对象类型
     */
    public string $object_type;
    
    /**
     * @var int $object_id 操作对象ID
     */
    public int $object_id;
    
    /**
     * @var string $object_name 操作对象名称
     */
    public string $object_name;
    
    /**
     * @var string $create_time 操作时间
     */
    public string $create_time;
    
    /**
     * @var array<string> $content_log 操作前后内容
     */
    public array $content_log;
    
    /**
     * @var string $operator 操作人
     */
    public string $operator;
    
    /**
     * @var string $opt_ip 操作IP
     */
    public string $opt_ip;
    
}