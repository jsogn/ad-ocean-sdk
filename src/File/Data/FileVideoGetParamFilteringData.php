<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 视频过滤条件
class FileVideoGetParamFilteringData extends Data
{

    /**
     * @var int $width 视频宽度
     */
    public int $width;
    
    /**
     * @var int $height 视频高度
     */
    public int $height;
    
    /**
     * @var array $ratio 视频宽高比，示例: [1.7, 2.5]
输入1.7则搜索满足宽高比介于1.65-1.75之间的视频，即精度上下浮动0.05
     */
    public array $ratio;
    
    /**
     * @var array<string> $video_ids 视频ids，示例: ["86adb23eaa21229fc04ef932b5089bb8"]
数量限制：<=100
     */
    public array $video_ids;
    
    /**
     * @var array<int> $material_ids 素材id列表，可以根据material_ids（素材报表使用的id，一个素材唯一对应一个素材id）进行过滤
数量限制：<=100
     */
    public array $material_ids;
    
    /**
     * @var array<string> $signatures md5值列表，可以根据素材的md5进行过滤
数量限制：<=100
     */
    public array $signatures;
    
    /**
     * @var string $start_time 根据视频上传时间进行过滤的起始时间，与end_time搭配使用，格式：yyyy-mm-dd
     */
    public string $start_time;
    
    /**
     * @var string $end_time 根据视频上传时间进行过滤的截止时间，与start_time搭配使用，格式：yyyy-mm-dd
     */
    public string $end_time;
    
    /**
     * @var array<string> $labels 视频标签
     */
    public array $labels;
    
    /**
     * @var array<string> $source 素材来源，详见【附录-素材来源】
     */
    public array $source;
    
}