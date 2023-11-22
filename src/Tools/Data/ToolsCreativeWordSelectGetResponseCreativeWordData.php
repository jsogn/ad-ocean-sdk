<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 创意词包列表
class ToolsCreativeWordSelectGetResponseCreativeWordData extends Data
{

    /**
     * @var int $creative_word_id 创意词包ID
     */
    public int $creative_word_id;
    
    /**
     * @var string $name 创意词包名称
     */
    public string $name;
    
    /**
     * @var string $default_word 默认词
     */
    public string $default_word;
    
    /**
     * @var array<string> $words 替换词
     */
    public array $words;
    
    /**
     * @var string $content_type 创意词包类型，详见【附件-创意词包类型】
     */
    public string $content_type;
    
    /**
     * @var int $max_word_len 替换词最大长度
     */
    public int $max_word_len;
    
    /**
     * @var int $min_word_len 替换词最小长度
     */
    public int $min_word_len;
    
    /**
     * @var string $status 创意词包状态，详见【附件-创意词包状态】
     */
    public string $status;
    
    /**
     * @var float $user_rate 创意词包人群覆盖率取值范围:0-1
     */
    public float $user_rate;
    
}