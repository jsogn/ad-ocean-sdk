<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回转赠失败的目标广告主id
class ToolsSiteHandselPostResponseErrorListTargetAdvertiserIdData extends Data
{

    /**
     * @var string $error_reason 失败原因，当对origin_site_id的操作失败时，返回error_reason字段，成功无
     */
    public string $error_reason;
    
}