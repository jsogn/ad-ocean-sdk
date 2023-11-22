<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ToolsSiteUpdateStatusPostResponseData extends Data
{

    /**
     * @var \AdOceanSdk\Tools\Data\ToolsSiteUpdateStatusPostResponseFailData $fail 更新失败的site_id的list及失败的原因。如果全部更新成功，len(list) = 0
     */
    public \AdOceanSdk\Tools\Data\ToolsSiteUpdateStatusPostResponseFailData $fail;
    
    /**
     * @var list[string] $success 更新成功的site_id列表。如果全部更新失败，len(list) = 0
     */
    public list[string] $success;
    
}