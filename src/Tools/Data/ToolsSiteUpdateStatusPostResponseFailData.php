<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 更新失败的site_id的list及失败的原因。如果全部更新成功，len(list) = 0
class ToolsSiteUpdateStatusPostResponseFailData extends Data
{

    /**
     * @var string $message 错误信息
     */
    public string $message;
    
    /**
     * @var int $site_id 更新失败的site_id
     */
    public int $site_id;
    
}