<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class ToolsCommentReplyPostResponseData extends Data
{

    /**
     * @var array<int> $success_comment_ids 回复成功的评论id列表
     */
    public array $success_comment_ids;
    
}