<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsCommentReplyPostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主id
     */
    public int $advertiser_id;
    
    /**
     * @var array<int> $comment_ids 评论id列表，只允许传入小于等于20个评论id
     */
    public array $comment_ids;
    
    /**
     * @var string $reply_text 回复内容，最多支持100字
     */
    public string $reply_text;
    
}