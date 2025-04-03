<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class ToolsCommentHidePostResponseData extends Data
{

    /**
     * @var array<int> $success_comment_ids 隐藏成功的评论id列表
     */
    public array $success_comment_ids;
    
}