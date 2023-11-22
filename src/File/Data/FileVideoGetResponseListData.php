<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class FileVideoGetResponseListData extends Data
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
     * @var string $url 视频地址，仅限同主体进行素材预览查看，若非同主体会返回“素材所属主体与开发者主体不一致无法获取URL”
     */
    public string $url;
    
    /**
     * @var string $format 视频格式
     */
    public string $format;
    
    /**
     * @var string $signature 视频md5值
     */
    public string $signature;
    
    /**
     * @var string $poster_url 视频首帧截图，仅限同主体进行素材预览查看，若非同主体会返回“素材所属主体与开发者主体不一致无法获取URL”
     */
    public string $poster_url;
    
    /**
     * @var float $duration 码率，单位bps
     */
    public float $duration;
    
    /**
     * @var int $material_id 视频时长
     */
    public int $material_id;
    
    /**
     * @var int $bit_rate 素材id，即多合一报表中的素材id，一个素材唯一对应一个素材id
     */
    public int $bit_rate;
    
    /**
     * @var string $source 素材来源，详见【附录-素材来源】
     */
    public string $source;
    
    /**
     * @var string $create_time 素材的上传时间，格式："yyyy-mm-dd HH:MM:SS"
     */
    public string $create_time;
    
    /**
     * @var string $filename 素材的文件名
     */
    public string $filename;
    
    /**
     * @var array<string> $labels 视频标签
     */
    public array $labels;
    
    /**
     * @var array<string> $organization_tags 
     */
    public array $organization_tags;
    
}