<?php

declare(strict_types=1);

namespace AdOceanSdk\Agent\Data;

use AdOceanSdk\Kernel\Data\Data;

// 分页信息
class AgentAdvertiserSelectGetResponseCursorInfoData extends Data
{

    /**
     * @var int $total_number 总数
     */
    public int $total_number;
    
    /**
     * @var int $has_more 是否有下一页
     */
    public int $has_more;
    
    /**
     * @var int $count 页面数据量
     */
    public int $count;
    
    /**
     * @var int $cursor 下一次分页拉取的游标值
     */
    public int $cursor;
    
}