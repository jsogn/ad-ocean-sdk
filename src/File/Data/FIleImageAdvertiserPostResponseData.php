<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class FIleImageAdvertiserPostResponseData extends Data
{

    /**
     * @var string $id 图片ID
     */
    public string $id;
    
    /**
     * @var int $size 图片大小
     */
    public int $size;
    
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
    
    /**
     * @var string $format 图片格式
     */
    public string $format;
    
    /**
     * @var string $signature 图片md5
     */
    public string $signature;
    
}