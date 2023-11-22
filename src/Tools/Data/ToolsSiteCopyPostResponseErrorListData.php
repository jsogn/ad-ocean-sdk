<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 复制失败列表，整体成功不返回该列表
class ToolsSiteCopyPostResponseErrorListData extends Data
{

    /**
     * @var string $origin_site_id 返回复制失败后的原站点id
     */
    public string $origin_site_id;
    
    /**
     * @var string $error_reason 当对origin_site_id的操作失败时，返回详细原因，成功无
     */
    public string $error_reason;
    
}