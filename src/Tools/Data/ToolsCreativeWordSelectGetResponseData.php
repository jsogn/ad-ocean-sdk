<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ToolsCreativeWordSelectGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsCreativeWordSelectGetResponseCreativeWordData> $creative_word 创意词包列表
     */
    public array $creative_word;
    
}