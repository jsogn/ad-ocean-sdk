<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 视频封面列表
class ToolsVideoCoverSuggestGetResponseListData extends Data
{

    /**
     * @var string $id 图片ID
     */
    public string $id;
    
    /**
     * @var int $width 图片宽度
     */
    public int $width;
    
    /**
     * @var int $height 图片高度
     */
    public int $height;
    
    /**
     * @var string $url 图片预览地址
     */
    public string $url;
    
}