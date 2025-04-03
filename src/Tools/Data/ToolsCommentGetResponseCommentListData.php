<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 评论列表
class ToolsCommentGetResponseCommentListData extends Data
{

    /**
     * @var int $comment_id 评论ID
     */
    public int $comment_id;
    
    /**
     * @var string $text 评论内容
     */
    public string $text;
    
    /**
     * @var string $create_time 评论创建时间
     */
    public string $create_time;
    
    /**
     * @var int $reply_count 评论的回复数量
     */
    public int $reply_count;
    
    /**
     * @var int $like_count 点赞数
     */
    public int $like_count;
    
    /**
     * @var string $hide_status 隐藏状态, 允许值：
     */
    public string $hide_status;
    
    /**
     * @var string $level_type 查询的评论等级, 允许值：
     */
    public string $level_type;
    
    /**
     * @var int $is_stick 该评论是否置顶，0：表示不置顶，1：表示置顶
     */
    public int $is_stick;
    
    /**
     * @var string $emotion_type 评论情感, 允许值：
     */
    public string $emotion_type;
    
    /**
     * @var string $aweme_id 评论用户抖音号
     */
    public string $aweme_id;
    
    /**
     * @var string $aweme_name 评论用户昵称
     */
    public string $aweme_name;
    
    /**
     * @var int $promotion_id 广告id，仅2.0平台适用，仅引流流量返回
     */
    public int $promotion_id;
    
    /**
     * @var int $item_id 广告视频ID
     */
    public int $item_id;
    
    /**
     * @var string $item_title 视频标题
     */
    public string $item_title;
    
    /**
     * @var string $comment_permission 评论权限，WRITE：可写；READ：只读 可选值:
     */
    public string $comment_permission;
    
    /**
     * @var int $material_id 评论关联的视频素材id
     */
    public int $material_id;
    
    /**
     * @var array<string> $comment_images 评论图片内容，返回图片url列表
     */
    public array $comment_images;
    
    /**
     * @var string $comment_type 评论内容类型
     */
    public string $comment_type;
    
}