<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 起量版本列表
class ToolsPromotionRaiseVersionGetResponseRaiseVersionListData extends Data
{

    /**
     * @var int $raise_version 起量版本号
     */
    public int $raise_version;
    
    /**
     * @var string $start_time 当前版本起量开始时间，格式：yyyy-mm-dd HH:MM
     */
    public string $start_time;
    
    /**
     * @var string $end_time 当前起量版本结束时间，格式：yyyy-mm-dd HH:MM
     */
    public string $end_time;
    
}