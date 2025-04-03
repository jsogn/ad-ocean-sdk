<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 过滤条件，若此字段不传，或传空则视为无限制条件
class ToolsCommentGetParamFilteringData extends Data
{

    /**
     * @var array<int> $ad_ids 计划id列表，一次最多100个
     */
    public array $ad_ids;
    
    /**
     * @var array<int> $item_ids 广告视频id列表，一次最多100个，可通过【获取抖音授权关系】获取item_id和视频相关信息
     */
    public array $item_ids;
    
    /**
     * @var string $level_type 查询的评论等级，允许值：
     */
    public string $level_type;
    
    /**
     * @var int $is_replied 是否已回复
     */
    public int $is_replied;
    
    /**
     * @var string $hide_status 隐藏状态， 允许值：
     */
    public string $hide_status;
    
    /**
     * @var string $emotion_type 评论情感，允许值：
     */
    public string $emotion_type;
    
    /**
     * @var string $content 评论关键词，最长支持10个字符
     */
    public string $content;
    
    /**
     * @var array<int> $author_ids 视频作者抖音id，最多支持100个
     */
    public array $author_ids;
    
    /**
     * @var string $comment_type 评论内容类型，允许值：
     */
    public string $comment_type;
    
}