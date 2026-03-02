<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 素材图片小程序横图/竖图的url地址，要求尺寸必须为3:5，否则报错。仅支持竖图和横图择其一类型上传，若同时上传两种类型的图片则报错小程序横图或竖图上传最少3张，最多8张，大小不超过5MB图片格式要求jpeg、png或gif
class ToolsEbpWechatAppletCreatePostParamMaterialData extends Data
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