<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsCreativeWordCreatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
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
    
}