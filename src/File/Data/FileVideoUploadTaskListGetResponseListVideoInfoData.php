<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 视频素材信息
class FileVideoUploadTaskListGetResponseListVideoInfoData extends Data
{

    /**
     * @var string $video_id 视频id
     */
    public string $video_id;
    
    /**
     * @var int $material_id 素材id
     */
    public int $material_id;
    
    /**
     * @var int $size 文件大小
     */
    public int $size;
    
    /**
     * @var string $video_signature 文件md5值
     */
    public string $video_signature;
    
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
     * @var float $duration 视频时长
     */
    public float $duration;
    
}