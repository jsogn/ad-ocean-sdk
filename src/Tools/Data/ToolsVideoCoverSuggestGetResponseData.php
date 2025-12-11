<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ToolsVideoCoverSuggestGetResponseData extends Data
{

    /**
     * @var string $status 封面生成的状态枚举值：RUNNING（生成中）、SUCCESS（成功）、FAILED（失败）注意：视频封面不是实时生成，需要根据status字段判断封面生成的状态，大概需要6，7s中生成，所以当status=RUNNING时请等待后重试
     */
    public string $status;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsVideoCoverSuggestGetResponseListData> $list 视频封面列表
     */
    public array $list;
    
}