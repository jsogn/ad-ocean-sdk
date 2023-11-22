<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class FileVideoAdGetResponseData extends Data
{

    /**
     * @var string $id 视频ID
     */
    public string $id;
    
    /**
     * @var int $size 视频大小
     */
    public int $size;
    
    /**
     * @var int $width 视频宽度
     */
    public int $width;
    
    /**
     * @var int $height 视频高度
     */
    public int $height;
    
    /**
     * @var string $url 视频地址
     */
    public string $url;
    
    /**
     * @var int $duration 视频时长
     */
    public int $duration;
    
    /**
     * @var string $signature 视频md5值
     */
    public string $signature;
    
    /**
     * @var string $poster_url 视频首帧截图
     */
    public string $poster_url;
    
    /**
     * @var int $bit_rate 码率，单位bps
     */
    public int $bit_rate;
    
    /**
     * @var string $format 视频格式
     */
    public string $format;
    
    /**
     * @var int $material_id 素材id，即多合一报表中的素材id，一个素材唯一对应一个素材id
     */
    public int $material_id;
    
}