<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 筛选条件
class ToolsCommentMetricsGetParamFilteringData extends Data
{

    /**
     * @var string $level_type 评论层级，不传返回所有评论，可选值:
     */
    public string $level_type;
    
    /**
     * @var array<int> $author_ids 抖音号，一次最多查询100个抖音号id
     */
    public array $author_ids;
    
    /**
     * @var array<int> $item_ids 广告视频id列表，一次最多100个，可通过【获取抖音授权关系】获取item_id和视频相关信息
     */
    public array $item_ids;
    
    /**
     * @var string $hide_status 隐藏状态，不传返回全部，可选值:
     */
    public string $hide_status;
    
}