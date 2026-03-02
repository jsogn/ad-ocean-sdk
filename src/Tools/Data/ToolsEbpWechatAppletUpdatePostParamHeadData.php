<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 顶部头图的url，大小不超过5MB的图片，推荐尺寸2:1
class ToolsEbpWechatAppletUpdatePostParamHeadData extends Data
{

    /**
     * @var string $uri 
     */
    public string $uri;

    /**
     * @var int $width 
     */
    public int $width;

    /**
     * @var int $height 
     */
    public int $height;

    /**
     * @var string $tos_key 
     */
    public string $tos_key;

    /**
     * @var string $url 图片URL
     */
    public string $url;

}