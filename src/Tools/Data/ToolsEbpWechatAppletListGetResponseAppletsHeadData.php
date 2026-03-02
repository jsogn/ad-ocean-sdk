<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 头图
class ToolsEbpWechatAppletListGetResponseAppletsHeadData extends Data
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
     * @var string $url 带签名的URL,含过期时间
     */
    public string $url;

}