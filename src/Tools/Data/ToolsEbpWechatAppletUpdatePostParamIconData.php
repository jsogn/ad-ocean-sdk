<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 小程序icon图片的url，尺寸60*60px,大小不超2MB
class ToolsEbpWechatAppletUpdatePostParamIconData extends Data
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