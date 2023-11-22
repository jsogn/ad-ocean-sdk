<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class FileVideoAdPostResponseData extends Data
{

    /**
     * @var string $video_id 视频ID
     */
    public string $video_id;
    
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
     * @var string $video_url 视频地址
     */
    public string $video_url;
    
    /**
     * @var double $duration 视频时长
     */
    public double $duration;
    
    /**
     * @var int $material_id 素材id，即多合一报表中的素材id，一个素材唯一对应一个素材id
     */
    public int $material_id;
    
    /**
     * @var string $video_signature 视频的md5值
     */
    public string $video_signature;
    
}